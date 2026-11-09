<?php

namespace App\Http\Requests\Body;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CreateBodyMeasurementRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'profile_id' => ['required', 'integer', 'exists:profiles,id'],
            'weight_kg' => ['required', 'integer'],
            'measurement_at' => ['required', 'date'],
            'notes' => ['nullable', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'weight_kg.integer' => 'The weight kg must be an integer.',
            'measurement_at.date' => 'The measurement at must be a date.',
            'notes.string' => 'The notes must be a string.',
        ];
    }
}
