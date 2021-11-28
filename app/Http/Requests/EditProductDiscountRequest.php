<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductDiscountRequest extends FormRequest
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
        return[
            'img'=>'image',
            'name'=>'unique:vp_products,prod_name',
            'slug'=>'unique:vp_products,prod_slug',
            
            'name'=>'unique:vp_products,prod_name,'.$this->segment(4).',prod_id',
            'slug'=>'unique:vp_products,prod_slug,'.$this->segment(4).',prod_id'
        ];
    }
    public function messages()
    {
        return[
            'name.unique'=>'Tên sản phẩm đã tồn tại, vui lòng nhập một tên khác...',
            'slug.unique'=>'Tên slug đã tồn tại, vui lòng nhập một tên khác...'
        ];        
    }
}
