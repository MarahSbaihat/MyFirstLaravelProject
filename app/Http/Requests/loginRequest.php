<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
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
            'name' => ['required', 'alpha', 'min:2'],
            'email' => ['required', 'email:filter'],
            'password' => ['required', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/']
        ];
    }

    public function messages(){
        return [
            'name.required' => "Name is required. Please enter your name.",
            'name.alpha' => "Only letters are allowed in name.",
            'name.min' => "At least 2 characters are needed for the name.",

            'email.required' => "Email field can not be empty. Please enter your email address.",
            'email.email' => "Invalid email format. Please check and try again.",

            'password.required' => "Password field can not be empty. Please enter your password.",
            'password.regex' => "Must contain at least one uppercase letter, one lowercase letter and one number and length must be at least 8 characters."
        ];
    }
}
