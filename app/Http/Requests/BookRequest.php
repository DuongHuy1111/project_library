<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'name'=>'required|max:255',
            'image'=>'required',
            'totalQty'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '* Thiếu tên sách',
            'name.max' => '* Tên sách quá dài',
            'image.required' => '* Thiếu ảnh đại diện',
            'totalQty.required' => '* Thiếu số lượng sách',
        ];
    }
}
