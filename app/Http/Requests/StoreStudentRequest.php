<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreStudentRequest extends FormRequest
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
            //
            'name' => ['required'],
            'age' => ['required'],
            'username' => ['required'],
            'email' => ['required', 'unique:students,email'],
            'password' => ['required']
        ];
    }
    public function failedValidation(Validator $validator){

        throw new HttpResponseException(response()->json(
            [
               'success' => false,
               'message' => 'Validation errors',
               'data' => $validator->errors()

            ]
        ));
    }
}
