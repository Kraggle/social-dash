<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DefaultRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'name' => ['required', 'min:3', 'max:255'],
            'description' => ['nullable'],
            'for_table' => ['required', Rule::in(['accounts', 'users', 'teams', 'posts'])],
            'options.key' => ['required', 'min:3', 'max:255'],
            'options.type' => ['required', Rule::in(['number', 'checkbox', 'text'])],
        ];
    }
}
