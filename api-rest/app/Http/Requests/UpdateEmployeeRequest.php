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

    public function rules(): array
    {
        return [
            'firstname' => 'max:100',
            'lastname' => 'max:100',
            'email' => 'email',
            'phone' => 'max:20|nullable',
            'birthdate' => 'date|nullable',
            'employee_id' => 'numeric',
        ];
    }
}
