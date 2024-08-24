<?php

namespace App\Http\Requests;

use App\Generator\Token;
use App\Models\Requester;
use App\Rules\InSexRule;
use App\Rules\BetweenDateHappyRule;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Foundation\Http\FormRequest;

class NewReservationRequest extends FormRequest
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
            'name' => [
                'required',
                'between:2,255',
                'string',
            ],
            'firstname' => [
                'required',
                'between:2,255',
                'string',
            ],
            'lastname' => [
                'between:2,255',
            ],
            'happy' => [
                'required',
                'date',
            ],
            'phone' => [
                'required',
            ],
            'email' => [
                'required',
                'email',
            ],
            'registration_number' => [
                'required',
            ],
            'gender' => [
                'required',
                (new InSexRule())
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
