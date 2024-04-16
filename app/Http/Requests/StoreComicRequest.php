<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|max:100',
            'description' => 'nullable',
            'thumb' => 'nullable',
            'price' => 'required|max:8',
            'series' => 'required|max:150',
            'sale_date' => 'required|date',
            'type' => 'required|max:150',
            'artists' => 'nullable',
            'writers' => 'nullable',
        ];
    }
}
