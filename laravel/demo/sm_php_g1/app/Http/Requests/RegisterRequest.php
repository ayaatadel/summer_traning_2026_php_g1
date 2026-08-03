<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|min:2|max:20',
            "email" => "required|unique:users,email",

        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "Name is required",
            "name.min" => "Name must be at least 3 characters",
            "name.max" => "Name must be less than 20 characters",


            "email.required" => "Description is required",
            "email.unique" => "email already exist",
        ];
    }
}
