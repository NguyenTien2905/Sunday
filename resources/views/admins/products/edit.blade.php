@extends('layouts.admin')

@section('title')
    {{ $title }}
@endsection

@section('css')
    <!-- Quill css -->
    <link href="/assets/admin/libs/quill/quill.core.js" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />
    <link href="/assets/admin/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-xxl">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">Sửa thông tin sản phẩm </h4>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title mb-0">Form nhập dữ liệu</h5>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <form action="{{ route('admins.products.update', $product->id) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-3">
                                        <label for="sku" class="form-label">Mẫ sản phẩm</label>
                                        <input type="text" id="sku" name="sku"
                                            class="form-control @error('sku') is-invaild @enderror"
                                            value="{{ $product->sku }}" placeholder="Mẫ sản phẩm">
                                        @error('sku')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="name" class="form-label">Tên sản phẩm</label>
                                        <input type="text" id="name" name="name"
                                            class="form-control @error('name') is-invaild @enderror"
                                            value="{{ $product->name }}" placeholder="Tên sản phẩm">
                                        @error('name')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="category_id" class="form-label">Danh mục</label>
                                        <select name="category_id"
                                            class="form-select  @error('category_id') is-invaild @enderror">
                                            <option selected>-- Chọn danh mục --</option>
                                            @foreach ($listCategory as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $product->category_id == $item->id ? 'selected' : '' }}>
                                                    {{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="price_regular" class="form-label">Giá sản phẩm</label>
                                        <input type="number" id="price_regular" name="price_regular"
                                            class="form-control @error('price_regular') is-invaild @enderror"
                                            value="{{ $product->price_regular }}" placeholder="Giá sản phẩm">
                                        @error('price_regular')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="price_sale" class="form-label">Giá khuyến mãi</label>
                                        <input type="number" id="price_sale" name="price_sale"
                                            class="form-control @error('price_sale') is-invaild @enderror"
                                            value="{{ $product->price_sale }}" placeholder="Giá khuyến mãi">
                                        @error('price_sale')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="quantity" class="form-label">Số lượng</label>
                                        <input type="number" id="quantity" name="quantity"
                                            class="form-control @error('quantity') is-invaild @enderror"
                                            value="{{ $product->quantity }}" placeholder="Số lượng sản phẩm">
                                        @error('quantity')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="import_date" class="form-label">Ngày nhập</label>
                                        <input type="date" id="import_date" name="import_date"
                                            class="form-control @error('import_date') is-invaild @enderror"
                                            value="{{ $product->import_date }}" placeholder="Giá sản phẩm">
                                        @error('import_date')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="discription" class="form-label">Mô tả ngắn</label>
                                        <textarea name="discription" id="discription" class="form-control @error('discription') is-invaild @enderror"
                                            rows="3" placeholder="Mô tả ngắn">{{ $product->discription }}</textarea>
                                        @error('discription')
                                            <p class="text-danger mt-1">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="is_type" class="form-label">Trạng thái</label>
                                        <div class="col-sm-10 d-flex gap-2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="is_type"
                                                    id="is_type1" value="1"
                                                    {{ $product->is_type == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label text-primary" for="is_type1">
                                                    Hiển thị
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="is_type"
                                                    id="is_type2" value="0"
                                                    {{ $product->is_type == 0 ? 'checked' : '' }}>
                                                <label class="form-check-label text-danger" for="is_type2">
                                                    Ẩn
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <label for="others" class="form-label">Tùy chỉnh khác</label>
                                    <div class="form-switch mb-2 d-flex ps-3 justify-content-between">
                                        <div class="form-check">
                                            <input class="form-check-input bg-danger" type="checkbox" id="is_new"
                                                name="is_new" {{ $product->is_new == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="is_new">New</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input bg-warning" type="checkbox" id="is_hot"
                                                name="is_hot" {{ $product->is_hot == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="is_hot">Hot</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input bg-primary" type="checkbox" id="is_hot_deal"
                                                name="is_hot_deal" {{ $product->is_hot_deal == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="is_hot_deal">Hot Deal</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input bg-success" type="checkbox" id="is_show_home"
                                                name="is_show_home" {{ $product->is_show_home == 1 ? 'checked' : '' }}>
                                            <label class="form-check-label" for="is_show_home">Show Home</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <label class="form-label" for="content">Mô tả chi tiết</label>
                                    <div class="mb-3">
                                        <div id="quill-editor" style="height: 400px;">
                                        </div>
                                        <textarea name="content" id="inside_content" class="d-none"></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <label for="img_thumnail" class="form-label">Hình ảnh</label>
                                        <input type="file" id="img_thumnail" name="img_thumnail"
                                            placeholder="Hình ảnh danh mục" class="form-control"
                                            onchange="showImage(event)">
                                        <img id="img" src="{{ Storage::url($product->img_thumnail) }}"
                                            alt="Hình ảnh danh mục" style="width: 100px;">
                                    </div>

                                    <div class="mb-3">
                                        <label for="icon" class="form-label">Album hình ảnh</label>
                                        <i id="add-row" class="mdi mdi-plus text-muted fs-18 rounded-2 border ms-3 p-1"
                                            style="cursor: pointer;"></i>
                                        <table class="table align-middle table-nowarp mb-0">
                                            <tbody id="image-table-body">
                                                @foreach ($product->imagesProduct as $index => $images)
                                                    <tr class="=">
                                                        <td class="d-flex align-item-center">
                                                            <img id="preview_{{ $index }}"
                                                                src="{{ Storage::url($images->image) }}"
                                                                alt="Hình ảnh danh mục" style="width: 40px;"
                                                                class="me-3">
                                                            <input type="file" id="image"
                                                                name="list_images[{{ $images->id }}]"
                                                                placeholder="Hình ảnh danh mục" class="form-control"
                                                                onchange="previewImage(this, {{ $index }})">
                                                            <input type="hidden"
                                                                name="list_images[{{ $images->id }}]"
                                                                value="{{ $images->id }}">
                                                        </td>
                                                        <td>
                                                            <i class="mdi mdi-delete text-muted fs-18 rounded-2 border p-1"
                                                                style="cursor: pointer;"onclick="removeRow(this)"></i>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
@endsection

@section('js')
    <!-- Quill Editor Js -->
    <script src="/assets/admin/libs/quill/quill.core.js"></script>
    <script src="/assets/admin/libs/quill/quill.min.js"></script>

    <script>
        function showImage(event) {
            const img = document.getElementById('img');

            console.log(img);

            const file = event.target.files[0];

            const reader = new FileReader();

            reader.onload = function() {
                img.src = reader.result;
                img.style.display = 'block';
            }

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>

    {{-- Editor Content --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var quill = new Quill("#quill-editor", {
                theme: "snow",

            })

            // Hiển thì nội dung cũ
            var old_inside = `{!! $product->content !!}`;
            quill.root.innerHTML = old_inside;

            // Cập nhật textarea khi quill-editor thay đổi
            quill.on('text-change', function() {
                var html = quill.root.innerHTML;
                document.getElementById('inside_content').value = html;
            })

        })
    </script>

    {{-- Thêm ảnh vào Album --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var rowCount = {{ count($product->imagesProduct) }};

            document.getElementById('add-row').addEventListener('click', function() {
                var tableBody = document.getElementById('image-table-body');

                var newRow = document.createElement('tr');

                newRow.innerHTML = `  
                    <td class="d-flex align-item-center">
                        <img id="preview_${rowCount}"
                           src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrVLGzO55RQXipmjnUPh09YUtP-BW3ZTUeAA&s"
                           alt="Hình ảnh danh mục" style="width: 40px;" class="me-3">
                        <input type="file" id="image" name="list_images[id_${rowCount}]"
                            placeholder="Hình ảnh danh mục" class="form-control"
                            onchange="previewImage(this, ${rowCount})">

                    </td>
                    <td>
                        <i class="mdi mdi-delete text-muted fs-18 rounded-2 border p-1"
                            style="cursor: pointer;" onclick="removeRow(this)"></i>
                    </td>
                `;

                tableBody.appendChild(newRow);
                rowCount++;
            });


        });

        function previewImage(input, rowIndex) {
            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    document.getElementById(`preview_${rowIndex}`).setAttribute('src', e.target.result)
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        function removeRow(item) {
            var row = item.closest('tr');
            row.remove();
        }
    </script>
@endsection
