<?php

namespace App\Http\Requests\Secretary;

use App\Generator\Token;
use App\Rules\DateTimeRangeRule;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class ApprovedRequest extends FormRequest
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
            'secretary_id' => [
                'required',
                'exists:secretaries,id'
            ],
            'for_date' => [
                'required',
                (new DateTimeRangeRule())
            ]
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'secretary_id' => Auth::user()->secretary_id,
        ]);
    }
}
