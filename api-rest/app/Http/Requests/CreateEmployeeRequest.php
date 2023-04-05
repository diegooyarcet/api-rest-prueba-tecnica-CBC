<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployeeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => 'required|max:100',
            'lastname' => 'required|max:100',
            'email' => 'required|email',
            'phone' => 'max:20|nullable',
            'birthdate' => 'date|nullable',
            'employee_id' => 'required|numeric',
        ];
    }
}
