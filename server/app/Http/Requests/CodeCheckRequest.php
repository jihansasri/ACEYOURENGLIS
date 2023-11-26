<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CodeCheckRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'code' => ['required', 'string', 'exists:reset_code_passwords'],
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response([
            "errors" => $validator->getMessageBag()
        ], 400));
    }

    public function messages()
    {
        return [
            'code.exists' => 'Invalid code please try again'
        ];
    }
}