<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class SavePostRequest extends FormRequest
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
            'title' => [
                'required',
                'min:10',
                'max:50',
                Rule::unique('posts')->ignore($this->id)
            ],
            'content' => [
                'required',
                'min:10',
            ],
            'short_desc' => [
                'required',
                'min:10'
            ],
            'author' => [
                'required',
            ]

        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Nhập tiêu đề",
            'title.min' => "Tiêu đề phải lớn hơn 10 ký tự",
            'title.max' => "Tiêu đề phải nhỏ hơn 50 ký tự",

            'content.required' => "Nhập nội dung",
            'content.min' => "Nội dung phải lớn hơn 10 ký tự",

            'short_desc.required' => "Nhập miêu tả ngắn",
            'short_desc.min' => "Miêu tả ngắn phải lớn hơn 10 ký tự",

            'author.required' => "Nhập tác giả",

        ];
    }
}
