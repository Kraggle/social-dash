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

    public function messages() {
        return [
            'username.unique' => 'This username has already been assigned to this team.'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        $team_id = auth()->user()->team->id;
        $username = $this->username;
        return [
            'username' => [
                'required',
                Rule::unique('accounts')->where(function ($query) use ($username, $team_id) {
                    return $query->where('username', $username)->where('team_id', $team_id);
                })
            ],
            'pk' => [
                'required'
            ]
        ];
    }
}
