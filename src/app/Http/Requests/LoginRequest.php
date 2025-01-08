<?php

namespace App\Http\Requests;

use Laravel\Fortify\Http\Requests\LoginRequest as FortifyLoginRequest;

class LoginRequest extends FortifyLoginRequest
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
            'account_id' => ['required','string'],
            'password' => ['required','string'],
        ];
    }

    public function messages()
    {
        return[
            "account_id.required" => "ユーザー名かメールアドレスを入力してください",
            "password.required" => "パスワードを入力してください"
        ];
    }
}
