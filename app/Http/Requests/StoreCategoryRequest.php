<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
class StoreCategoryRequest extends FormRequest
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
           'name'=>'required|unique:categories|min:2',
            'parent_id'=>'numeric',
        ];
    }

    public function messages(){
        return [
        'name.required'=>'Mời bạn nhập tên',
        'name.min'=>'Tên phải có ít nhất 2 kí tự',
        'parent_id.numeric'=>'Parent ID phải là số',
        ];
        
    }
}
