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
}
