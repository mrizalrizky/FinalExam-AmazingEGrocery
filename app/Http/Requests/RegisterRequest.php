<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name'           => 'required|string|alpha|max:25',
            'last_name'            => 'required|string|alpha|max:25',
            'email'                => 'required|email|unique:accounts',
            'password'             => ['required', 'confirmed', Password::min(8)->numbers()],
            'gender_id'            => 'required',
            'role_id'              => 'required',
            'display_picture_link' => 'required|image',
        ];
    }
}
