<?php

namespace App\Http\Requests\Admin;

use App\Models\Grade;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Foundation\Http\FormRequest;

class GradeRequest extends FormRequest
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
                (new Unique(Grade::class))->ignore($id)
            ],
            'description' => [
                'required',
                'between:10,5000',
            ],
        ];
    }
}
