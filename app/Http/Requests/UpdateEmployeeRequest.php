<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
         $id = $this->route('employee')->id ?? null;
        return [
        'name'       => ['required','string','max:255'],
        'cpf'        => ['required','string',"unique:employees,cpf,{$id}", new \App\Rules\Cpf],
        'birth_date' => ['required','date'],
        'phone'      => ['required','regex:/^\d+$/','min:8','max:20'],
        'gender'     => ['required','in:Masculino,Feminino,Outro'],
    ];
    }
}
