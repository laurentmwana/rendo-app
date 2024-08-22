<?php

namespace App\Http\Requests\Admin;

use App\Models\User;
use App\Models\Secretary;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
                (new Unique(User::class))->ignore($id)
            ],
            'email' => [
                'required',
                'max:255',
                'email',
                (new Unique(User::class))->ignore($id)
            ],
            'password' => [
                'required',
                Rules\Password::defaults()
            ],
            'secretary_id' => [
                'required',
                'exists:secretaries,id'
            ]
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([
            'password' => $this->input('password') === null ? '12345678' : $this->input('password'),
        ]);
    }
}
