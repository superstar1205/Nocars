<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * Pre-process the Request
     */
    public function prepareForValidation(): void
    {
        $username = strtolower(substr($this->username, 0, 254));

        // replace the data ready for validation
        $this->merge([
            'username' => $username
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // validate the form
        return [
            'username' => [
                "required",
                "min:4"
            ],
            'password' => [
                "required"
            ]
        ];
    }
}
