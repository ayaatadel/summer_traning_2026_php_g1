<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            "description" => "required|min:3|max:100",
        ];
    }

    public function messages(): array
    {
        return [
            "name.required" => "Name is required",
            "name.min" => "Name must be at least 3 characters",
            "name.max" => "Name must be less than 20 characters",
            "name.string" => "Name must be a string",
            "name.unique" => "Name already exists",

            "description.required" => "Description is required",
            "description.min" => "Description must be at least 3 characters",
            "description.max" => "Description must be less than 100 characters",
        ];
    }
}
