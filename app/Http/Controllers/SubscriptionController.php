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

namespace App\Http\Controllers;

use App\Package;
use App\Helpers\AppHelper;
use \Illuminate\Http\Request;

class SubscriptionController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\View\View
	 */
	public function index() {
		return view('auth.subscription', [
			'intent' => auth()->user()->team->createSetupIntent()
		]);
	}

	public function store(Request $request) {
		$this->validate($request, [
			'token' => 'required'
		]);

		$package = Package::where('id', $request->package_id ?? 2)->first();

		$team = $request->user()->team;
		$team->newSubscription('default', $package->price_id)->trialDays(7)->create($request->token, [
			'email' => $team->admin()->email
		]);
		$team->package_id = $request->package_id;
		$team->save();

		return redirect('home');
	}
}
