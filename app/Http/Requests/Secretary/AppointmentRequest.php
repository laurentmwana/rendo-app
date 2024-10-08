<?php

namespace App\Http\Requests\Secretary;

use App\Generator\Token;
use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
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
        return [
            'requester_id' => [
                'required',
                'exists:requesters,id'
            ],
            'worker_id' => [
                'required',
                'exists:workers,id'
            ],
            'reason' => [
                'required',
                'between:10,5000'
            ]
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'registration_number' => Token::alpha(8),
        ]);
    }
}
