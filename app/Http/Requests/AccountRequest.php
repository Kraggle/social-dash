<?php

namespace App\Http\Requests;

use App\Account;
use App\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest {
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
            'username' => [
                'required', 'min:3'
            ],
            'pk' => [
                'required', Rule::unique((new Account)->getTable())->ignore($this->route()->item->id ?? null)
            ]
        ];
    }
}
