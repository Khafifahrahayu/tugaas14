<?php 

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama' => 'required',
            'username' => 'required|unique:user,username',
            'email' => 'required|email:rfc,dns',
            'password' =>'required',
            'no_handphone' =>'required',

        ];
    }

    function messages(){
        return [
            'nama.required' => 'Field Nama Wajib Diisi',
            'username.required' => 'Field Username Wajib Diisi',
            'username.unique' => 'Username Tersebut Sudah Terdaftar',
            'email.required' => 'Email Wajib Diisi',
            'password.required' => 'Password Wajib Diisi',
            'no_handphone.required' => 'Nomor Hp Wajib Diisi',



        ];
    }
}