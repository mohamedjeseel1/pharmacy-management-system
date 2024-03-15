<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerCreateRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\-\'\s]+$/'],
            'address' => ['string', 'max:255'],
            'phone' => ['digits:10', 'regex:/^[0-9]{10}$/'],
            'email' => ['string', 'lowercase', 'email', 'max:255', 'unique:customers,email'],
            'date_of_birth' => ['date', 'date_format:Y-m-d'],
            'medical_conditions' => ['string', 'max:255'],
        ];
    }
}
