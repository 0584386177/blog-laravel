<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'register-username' => ['required'],
            'register-email' => ['email','required'],
            'register-password' => ['required'],
        ];


    }

    public function messages(){
          return [
            'register-username.required' => "Vui lòng nhập username",
            'register-email.required' => "Vui lòng nhập email",
            'register-password.required' => "Vui lòng nhập mật khẩu",
        ];
    }
}
