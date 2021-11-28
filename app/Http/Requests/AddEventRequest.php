<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddEventRequest extends FormRequest
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
            // 'img'=>'image',
            'name'=>'unique:vp_event,event_name'
        ];
    }
    public function messages()
    {
        return[
            'name.unique'=>'Tên danh mục sự kiện đã tồn tại, vui lòng nhập một tên khác...'
        ];        
    }
}
