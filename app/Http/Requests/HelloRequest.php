<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HelloRequest extends FormRequest
{
    public function authorize(): bool
    {
        if ($this->path() == 'hello')
        {
            return true;
        } else {
            return false;
        }
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力してください。',
            'mail.email' => 'メールアドレスが必要です。',
            'age.numeric' => '年齢を整数で入力してください。',
            'age.between' => '年齢は0〜150の間で入力してください。',
        ];
    }
}
