<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicineCreateRequest extends FormRequest
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
            'description' => ['string', 'max:255'],
            'quantity' => ['required','integer'],
            'dosage_form' => ['string', 'max:255'],
            'strength' => ['string', 'max:255'],
            'expiry_date' => ['date', 'date_format:Y-m-d'],
            'manufacturer' => ['string', 'max:255'],
        ];
    }
}
