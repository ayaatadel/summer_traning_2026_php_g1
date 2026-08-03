<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Override;

class ProductRequest extends FormRequest
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
           "name" => "required|min:3|max:20|string|unique:categories,name",
                // email
                "price"=>"rquired|min:1|decimal",


                "description" => "required|min:3|max:100"
        ];
    }


    public function messages():array
    {
        return [
            "name.required" => "name is required",
                "name.min" => "name must be at least 3 characters",
                "name.max" => "name must be less than 20 characters",
                "name.string" => "name must be string",
                "name.unique" => "name is already exists",
                "price.required"=>"price is required"

        ];
    }
}
