<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'sku' => 'required|max:10|unique:products,sku,' . $this->route('id'),
            'name' => 'required|max:255',
            'img_thumnail' => 'image|mimes:jpg,jpeg,png,gif',
            'price_regular' => 'required|numeric|min:0',
            'price_sale' => 'numeric|min:0|lt:price_regular',
            'discription' => 'string|max:255',
            'quantity' => 'integer|min:0',
            'import_date' => 'required|date',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function messages(): array
    {
        return [
            'sku.required' => 'Mẫ sản phẩm bắt buộc điền',
            'sku.max' => 'Mẫ sản phẩm không được vượt quá 10 ký tự',
            'sku.unique' => 'Mẫ sản phẩm đẫ tồn tại',
            'name.required' => 'Tên sản phẩm là bắt buộc',
            'name.max' => 'Tên sản phẩm không được vượt quá 255 ký tự',
            'img_thumnail.image' => 'Hình ảnh không hợp lệ',
            'img_thumnail.mimes' => 'Hình ảnh không hợp lệ',
            'price_regular.required' => 'Giá sản phẩm bắt buộc',
            'price_regular.numeric' => 'Giá sản phẩm phải là số',
            'price_regular.min' => 'Giá sản phẩm phải lớn hơn 0',
            'price_sale.numeric' => 'Giá khuyến mãi phải là số',
            'price_sale.min' => 'Giá khuyến mãi phải lớn hơn hoặc bằng 0',
            'price_sale.lt' => 'Giá khuyến mãi phải nhỏ hơn giá sản phẩm',
            'discription.max' => 'Mô tả ngắn quá dài không vượt quá 255 ký tự',
            'quantity.integer' => 'Số lượng phải là số dương',
            'quantity.min' => 'Số lượng phải lớn hơn hoặc bằng 0',
            'import_date.required' => 'Ngày nhập là bắt buộc',
            'import_date.date' => 'Ngày nhập không đúng định dạng',
            'category_id.required' => 'Danh mục là bắt buộc',
            'category_id.exists' => 'Danh mục không tồn tại',

        ];
    }
}
