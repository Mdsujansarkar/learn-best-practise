<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title'       => ['required', 'string', 'max:255'],
            'uid'         => ['required', 'string', 'unique:your_table_name,uid'],
            'description' => ['nullable', 'string'],
            'status'      => ['required', 'in:active,inactive,pending'], // Example status options
            'author_id'   => ['required', 'exists:users,id'], // Ensure author exists
        ];
    }
}
