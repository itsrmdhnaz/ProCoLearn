<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Set to true if all authenticated users can perform these actions
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'roles' => 'required|array',
            'resources' => 'required|string',
            'image' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'The project name is required.',
            'name.string' => 'The project name must be a valid string.',
            'name.max' => 'The project name must not exceed 255 characters.',

            'description.required' => 'The project description is required.',
            'description.string' => 'The project description must be a valid string.',

            'roles.required' => 'At least one role must be selected.',
            'roles.array' => 'The roles must be provided as an array.',

            'resources.required' => 'The resources field is required.',
            'resources.string' => 'The resources field must be a valid string.',

            'image.required' => 'The project image is required.',
        ];
    }
}
