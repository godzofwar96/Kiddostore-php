<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required|min:2|max:255'
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute không được bỏ trống',
            'email' => ':attribute không đúng dịnh dạng email',
            'numeric' => ':attribute không đúng!',
            'min' => ':attribute tối thiểu có 2 kí tự',
            'max' => ':attribute tối đa 255 kí tự',
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'Địa chỉ email',
            'phone' =>  'Số điện thoại',
            'address' => 'Địa chỉ nhận hàng',
        ];
    }
}
