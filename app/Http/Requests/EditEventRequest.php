<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditEventRequest extends FormRequest
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
            'name'=>'unique:vp_event,event_name,'.$this->segment(4).',event_id',
            // 'menu'=>'unique:vp_categories,cate_menu,'.$this->segment(4).',cate_menu'
        ];
    }
    public function messages()
    {
        return[
            'name.unique'=>'Tên danh mục đã tồn tại, vui lòng nhập một tên khác...'
        ];        
    }
}
