<?php

namespace App\Http\Controllers;

use App\Account;
use App\Http\Requests\AccountRequest;
use App\Team;
use App\Defaults;

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
        $this->authorize('manage-accounts', User::class);
        return view('account.index', ['accounts' => $model->all()]);
    }

    /**
     * Create an account for a team.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        $this->authorize('manage-accounts', User::class);
        return view('account.create', [
            'teams' => Team::all(),
            'settings' => Defaults::where('for_table', 'accounts')->get()
        ]);
    }

    /**
     * Store a newly created account.
     *
     * @return \Illuminate\View\View
     */
    public function store(AccountRequest $request, Account $model) {
        $account = $model->create($request->all());

        return redirect()->route('account.index')->withStatus(__('Account successfully added.'));
    }
}
