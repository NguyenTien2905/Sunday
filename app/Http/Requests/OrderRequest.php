<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
            'receiver' => 'required|string|max:255',
            'email_receiver' => 'required|string|email|max:255',
            'phone_receiver' => 'required|string|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address_receiver' => 'required|string|max:255',
        ];
    }

    public function messages(): array
    {
        return [

            'receiver.required' => 'Tên là bắt buộc',
            'receiver.string' => 'Tên phải là ký tự chuỗi ',
            'receiver.max' => 'Tên không được vượt quá 255 ký tự',

            'email_receiver.required' => 'Email bắt buộc',
            'email_receiver.string' => 'Email phải là chuỗi ký tự',
            'email_receiver.email' => 'Không đúng định dạng Email',
            'email_receiver.max' => 'Email không vượt quá 255 ký tự',

            'phone_receiver.required' => 'Số diện thoại là bắt buộc',
            'phone_receiver.regex' => 'Số điện thoại không hợp lệ',
            'phone_receiver.string' => 'Số điện thoại phải là chuỗi ký tự',

            'address_receiver.required' => 'Địa chỉ là bắt buộc',
            'address_receiver.string' => 'Địa chỉ phải là chuỗi ký tự',
            'address_receiver.max' => 'Địa chỉ không vượt quá 255 ký tự',
        ];
    }
}
