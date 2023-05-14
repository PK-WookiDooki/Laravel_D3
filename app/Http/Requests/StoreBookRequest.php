<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'unique:books,title|required|min:5|max:50',
            'author' => 'required|min:5|max:50',
            'price' => 'required|numeric|gte:5000',
            'stock' =>  'required|numeric|gte:3',
            'summery' => 'required|min:100'
        ];
    }
}
