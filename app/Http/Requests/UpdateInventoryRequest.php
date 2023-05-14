<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInventoryRequest extends FormRequest
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
        $id = request()->inventory->id;
        return [
            'name' => "required|min:3|max:50|unique:inventories,name,$id",
            'price' => 'required|numeric|gte:100',
            'stock' => 'required|numeric|gte:3',
        ];
    }
}
