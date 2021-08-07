<?php

namespace App\Http\Controllers\Auth;

use App\Models\Team;
use App\Models\User;
use App\Models\RegisterToken;
use App\Helpers\AppHelper;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller {
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {

        $data['name'] = $data['firstname'] . ' ' . $data['lastname'];

        $valid = Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'token' => ['sometimes', 'required', 'string']
        ]);

        if (isset($data['token'])) {
            $token = $data['token'];
            $valid = Validator::make($data, [
                'email' => [
                    Rule::exists('register_tokens', 'email')->where(function ($query) use ($token) {
                        return $query->where('token', $token);
                    })
                ]
            ], ['email.exists' => 'The provided token is not for this email address.']);
        }

        return $valid;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data) {

        $role_id = 3;
        $token = $data['token'] ?? null;
        $team = null;

        if ($token) {
            $column = RegisterToken::where('token', $token)->first();
            $role_id = $column->role_id;
            $team = $column->team;
        }

        if (in_array($role_id, [2, 3])) {
            $team = Team::create([
                'name' => $data['team_name']
            ]);
        }

        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'name' => $data['firstname'] . ' ' . $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $role_id,
            'team_id' => $team->id
        ]);
    }
}
