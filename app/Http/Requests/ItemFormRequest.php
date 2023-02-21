<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemFormRequest extends FormRequest
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
            'name' => 'required|max:100',
            'type' => 'integer',
            'detail' => 'max:500',
        ];
    }


    public function attributes()
    {
        return [
            'name' => '名前',
            'status' => 'ステータス',
            'type' => '種別',
            'detail' => '詳細',
            
        ];
    }
}