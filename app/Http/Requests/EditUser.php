<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUser extends FormRequest
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
            'name'=>'unique:vp_users,username,'.$this->segment(4).',id',
            'email'=>'unique:vp_users,email,'.$this->segment(4).',id',
            'password'=>'unique:vp_users,password,'.$this->segment(4).',id',
            // 'level'=>'unique:vp_users,level,'.$this->segment(4).',id',
        ];
    }
    public function messages()
    {
        return[
            'name.unique'=>'Username đã tồn tại, vui lòng nhập một Username khác...',
            'email.unique'=>'Email đã tồn tại, vui lòng nhập một Email khác...'
        ];        
    }
}
