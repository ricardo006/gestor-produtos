<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome'  => ['required', 'string', 'max:255'],
            'descricao' => ['required', 'string'],
            'preco' => ['required', 'numeric'],
            'status' => ['required', 'in:Ativo,Inativo'],
        ];
    }
}
