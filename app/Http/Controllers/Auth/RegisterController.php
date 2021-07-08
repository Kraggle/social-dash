<?php
/*

=========================================================
* Argon Dashboard PRO - v1.0.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro-laravel
* Copyright 2018 Creative Tim (https://www.creative-tim.com) & UPDIVISION (https://www.updivision.com)

* Coded by www.creative-tim.com & www.updivision.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

*/

namespace App\Http\Controllers\Auth;

use App\Role;
use App\Team;
use App\User;
use Stripe\SetupIntent;
use App\Helpers\AppHelper;
use Illuminate\Http\Request;
use Laravel\Cashier\Cashier;
use App\Traits\StripeFunctions;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
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
    use StripeFunctions;

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
            'policy' => ['required', 'boolean']
        ]);

        return $valid;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data) {

        $exists = key_exists('user_type', $data);
        if (!$exists || ($exists && !in_array($data['user_type'], [2, 3, 4])))
            $data['user_type'] = 3;

        $team = null;
        if (in_array($data['user_type'], [2, 3])) {
            $team = Team::create([
                'name' => $data['team_name']
            ]);
        } else {
            // TODO: setup team member additions with tokens
        }

        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'name' => $data['firstname'] . ' ' . $data['lastname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role_id' => $data['user_type'],
            'team_id' => $team->id
        ]);
    }
}
