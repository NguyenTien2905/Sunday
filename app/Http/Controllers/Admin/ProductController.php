<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\ImageProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Dann sách sản phẩm";

        $listProduct = Product::orderByDesc('is_type')->get();

        return view('admins.products.index', compact('title', 'listProduct'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $title = "Thêm Sản phẩm";

        $listCategory = Category::query()->get();

        return view('admins.products.create', compact('title', 'listCategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        if ($request->isMethod('POST')) {
            $params = $request->except('_token');

            //Chuyển đổi giá trị checkbox -> boolean
            $params['is_new'] = $request->has('is_new') ? 1 : 0;
            $params['is_hot'] = $request->has('is_hot') ? 1 : 0;
            $params['is_hot_deal'] = $request->has('is_hot_deal') ? 1 : 0;
            $params['is_show_home'] = $request->has('is_show_home') ? 1 : 0;

            //Xử lý hình ảnh đại diện
            if ($request->hasFile('img_thumnail')) {
                $params['img_thumnail'] = $request->file('img_thumnail')->store('uploads/products', 'public');
            } else {
                $params['img_thumnail'] = null;
            }

            //Thêm sản phẩm
            $product = Product::query()->create($params);

            //Lấy id sản phẩm vừa thêm dể chèn album hình ảnh
            $productID = $product->id;

            // Xử lý thêm album
            if ($request->file('list_images')) {
                foreach ($request->file('list_images') as $image) {
                    if ($image) {
                        $path = $image->store('uploads/imagesproducts/id_' . $productID, 'public');
                        $product->imagesProduct()->create(
                            [
                                'product_id' => $productID,
                                'image' => $path,
                            ]
                        );
                    }
                }
            }

            return redirect()->route('admins.products.index')->with('success', 'Thêm sản phẩm thành công');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = "Sửa Thông tin sản phẩm";

        $listCategory = Category::query()->get();

        $product = Product::query()->findOrFail($id);

        return view('admins.products.edit', compact('title', 'listCategory', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->isMethod('PUT')) {
            $params = $request->except('_token', '_method');

            //Chuyển đổi giá trị checkbox -> boolean
            $params['is_new'] = $request->has('is_new') ? 1 : 0;
            $params['is_hot'] = $request->has('is_hot') ? 1 : 0;
            $params['is_hot_deal'] = $request->has('is_hot_deal') ? 1 : 0;
            $params['is_show_home'] = $request->has('is_show_home') ? 1 : 0;

            $product = Product::query()->findOrFail($id);

            //Xử lý hình ảnh đại diện
            if ($request->hasFile('img_thumnail')) {
                if ($product->img_thumnail && Storage::disk('public')->exists($product->img_thumnail)) {
                    Storage::disk('public')->delete($product->img_thumnail);
                }
                $params['img_thumnail'] = $request->file('img_thumnail')->store('uploads/products', 'public');
            } else {
                $params['img_thumnail'] = $product->img_thumnail;
            }

            // Xử lý Album
            // Trường hợp xóa
            $currentImages = $product->imagesProduct->pluck('id')->toArray();
            $arrayCombine = array_combine($currentImages, $currentImages);

            foreach ($arrayCombine as $key => $value) {
                // Tìm kiếm ID H/ả trong mảng H/ả mới đẩy lên
                // Nếu không tồn tại ID -> Người dùng đã xóa hình ảnh 
                if (!array_key_exists($key, $request->list_images)) {
                    $img = ImageProduct::query()->find($key);
                    // Xóa hình ảnh
                    if ($img && Storage::disk('public')->exists($img->image)) {
                        Storage::disk('public')->delete($img->image);
                        $img->delete();
                    }
                }
            }

            // Lấy danh sách ID hình ảnh mới từ request
            $newImageIds = array_keys($request->list_images);

            // Tìm các ID hình ảnh bị xóa
            $deletedImageIds = array_diff($currentImages, $newImageIds);

            // Xóa hình ảnh bị xóa
            foreach ($deletedImageIds as $deletedImageId) {
                $imageProduct = ImageProduct::find($deletedImageId);
                if ($imageProduct && Storage::disk('public')->exists($imageProduct->image)) {
                    Storage::disk('public')->delete($imageProduct->image);
                    $imageProduct->delete();
                }
            }

            // Trường hợp Thêm và Sửa ( Cách thầy)
            // foreach ($request->list_images as $key => $image) {
            //     if (!array_key_exists($key, $arrayCombine)) {
            //         if ($request->hasFile("list_images")) {
            //             $path = $image->store('uploads/imagesproducts/id_' . $id, 'public');
            //             $product->imagesProduct()->create([
            //                 'product_id' => $id,
            //                 'image' => $path,
            //             ]);
            //         } else if (is_file($image) && $request->hasFile("list_images.$key")) {
            //             // Trường hợp thay đổi hình ảnh
            //             $img = ImageProduct::query()->find($key);
            //             if ($img && Storage::disk('public')->exists($img->image)) {
            //                 Storage::disk('public')->delete($img->image);
            //             }
            //             $path = $image->store('uploads/imagesproducts/id_' . $id, 'public');
            //             $product->imagesProduct()->update([
            //                 'image' => $path,
            //             ]);
            //         }
            //     }
            // }
            //Cách khác
            foreach ($request->file('list_images', []) as $key => $image) {
                if ($image->isValid()) {
                    $img = ImageProduct::find($key);
                    if ($img) {
                        // Xóa ảnh cũ nếu tồn tại
                        if (Storage::disk('public')->exists($img->image)) {
                            Storage::disk('public')->delete($img->image);
                        }
                        // Lưu ảnh mới
                        $path = $image->store('uploads/imagesproducts/id_' . $id, 'public');
                        $img->update(['image' => $path]);
                    } else {
                        // Tạo ảnh mới
                        $path = $image->store('uploads/imagesproducts/id_' . $id, 'public');
                        $product->imagesProduct()->create([
                            'product_id' => $id,
                            'image' => $path,
                        ]);
                    }
                }
            }
            $product->update($params);

            return redirect()->route('admins.products.index')->with('success', 'Cập nhật thông tin sản phẩm thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::query()->findOrFail($id);

        // Xóa hình ảnh đại diện
        if ($product->img_thumnail && Storage::disk('public')->exists($product->img_thumnail)) {
            Storage::disk('public')->delete($product->img_thumnail);
        }

        // Xóa album
        $product->imagesProduct()->delete();

        // Xóa toàn bộ H/a trong thư mục
        $path = 'uploads/imagesproducts/id_' . $id;
        if (Storage::disk('public')->exists($path)) {
            Storage::disk('public')->deleteDirectory($path);
        }

        //Xóa sản phẩm
        $product->delete();

        return redirect()->route('admins.products.index')->with('success', 'Xóa sản phẩm thành công');
    }
}
