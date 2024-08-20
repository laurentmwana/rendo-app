<?php

namespace App\Http\Requests\Admin;

use App\Models\Worker;
use App\Generator\Token;
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
                'date'
            ],
            'phone' => [
                'required',
                (new Unique(Worker::class))->ignore($id)
            ],
            'registration_number' => [
                'required',
                (new Unique(Worker::class))->ignore($id)
            ],
            'sex' => [
                'required',
            ],

            'grade_id' => [
                'required',
                'exists:grades,id'
            ]
        ];
    }

    public function prepareForValidation()
    {
        $this->merger([
            'registration_number' => Token::alpha(8),
        ]);
    }
}
