<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRegister extends FormRequest
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
            'name'=>'unique:vp_users,username',
            'email'=>'unique:vp_users,email',  
            'password' => 'required|min:3|max:15',
            'passwordAgain' => 'required|same:password'
        ];
    }
    public function messages()
    {
        return[
            'name.unique'=>' Username đã tồn tại, vui lòng nhập một Username khác...',
            'email.unique'=>'Email đã tồn tại, vui lòng nhập một Email khác...',
            'password.min'=> 'Mật khẩu phải ít nhất 3 ký tự',
            'password.max'=> 'Mật khẩu chỉ được tối đa 15 ký tự',
            'passwordAgain.same' => 'Mật khẩu nhập lại chưa khớp'
        ];        
    }
}
