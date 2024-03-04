<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactFormRequest extends FormRequest
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
            'name' => ['required', 'min:3'],
            'firstName' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('contacts')->ignore($this->route()->parameter('id'))],
            'phoneNumber' => ['required', 'phone'],
            'birthDay' => ['date_format:Y-m-d']
        ];
    }
}
