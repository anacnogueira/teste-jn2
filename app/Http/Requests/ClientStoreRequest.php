<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ClientStoreRequest extends FormRequest
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
            'name' => 'required',
            'phone' => 'required',
            'cpf' => ['required','cpf'],
            'license_plate' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Informe o nome do cliente',
            'phone.required' => 'Informe o telefone do cliente',
            'cpf.required' => 'Informe o cpf do cliente',
            'cpf.cpf' => 'CPF Informado inválido',
            'license_plate.required' => 'Informe a placa do carro do cliente',          
        ];
    }

    /**
     * Transform the error messages into JSON
     *
     * @param array $errors
     * @return \Illuminate\Http\JsonResponse
     */
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
}
