<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|unique:users',
            'role_as' => 'required',
            'phone' => 'required|max:11',
            'address' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'name.unique' => 'Your name is taken.',
            'email.unique' => 'Your email is taken.',
            'password.min' => 'Password must be at least 8 characters.',
            'password.unique' => 'Your password is taken.',
            'phone.required' => 'Phone is required',
            'phone.max' => 'Phone length is 11',
            'address.required' => 'Address is required',
        ];
    }
}
