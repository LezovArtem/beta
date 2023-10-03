<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'content' => ['required', 'string'],
            'preview_image' => ['required', 'mimes:jpeg,png,jpg'],
            'main_image' => ['required', 'mimes:jpeg,png,jpg'],
            'category_id' => ['required', 'integer', 'exists:categories,id'],
            'tag_ids' => ['nullable', 'array'],
            'tag_ids.*' => ['nullable', 'integer', 'exists:tags,id'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'This field must be filled',
            'title.string' => 'This field must be of type string',
            'content.required' => 'This field must be filled',
            'content.string' => 'This field must be of type string',
            'preview_image.required' => 'This field must be filled',
            'preview_image.mimes' => 'This field must be of type: jpeg, png, jpg',
            'main_image.required' => 'This filed must be filled',
            'main_image.mimes' => 'This field must be of type: jpeg, png, jpg',
            'category_id.required' => 'This filed must be filled',
            'category_id.integer' => 'This field must be of type integer',
        ];
    }
}
