<?php

namespace App\Http\Controllers;

use App\Account;
use App\Http\Requests\AccountRequest;

class AccountController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the accounts
     *
     * @param \App\Account  $model
     * @return \Illuminate\View\View
     */
    public function index(Account $model) {
        // $this->authorize('manage-accounts', User::class);

        return view('account.index', ['accounts' => $model->all()]);
    }

    public function create() {
        return view('account.create');
    }

    public function store(AccountRequest $request, Account $model) {
        $account = $model->create($request->all());
        $account->users()->sync(auth()->user());

        return 'Success';
    }
}
