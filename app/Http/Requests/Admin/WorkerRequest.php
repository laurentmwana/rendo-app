<?php

namespace App\Http\Requests\Admin;

use App\Models\Worker;
use App\Rules\InSexRule;
use App\Generator\Token;
use App\Rules\BetweenDateHappyRule;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Foundation\Http\FormRequest;

class WorkerRequest extends FormRequest
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
        $id = $this->input('id');

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
                (new BetweenDateHappyRule())
            ],
            'phone' => [
                'required',
                (new Unique(Worker::class))->ignore($id)
            ],
            'registration_number' => [
                'required',
                (new Unique(Worker::class))->ignore($id)
            ],
            'gender' => [
                'required',
                (new InSexRule())
            ],

            'grade_id' => [
                'required',
                'exists:grades,id'
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
