<?php

namespace App\Http\Controllers;

use App\Account;
use App\Http\Requests\AccountRequest;
use App\Team;
use App\Defaults;
use App\Setting;

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
    public function store(AccountRequest $request) {
        $model = Account::create($request->except('settings'));

        $settings = $request->settings;
        $defaults = Defaults::for('accounts');
        foreach ($settings as $key => $value) {
            Setting::create([
                'value' => $value ?? 0,
                'account_id' => $model->id,
                'default_id' => $defaults->$key->id
            ]);
        }

        // TODO:: Add total_cost, old_cost and renew_date

        return redirect()->route('account.index')->withStatus(__('Account successfully added.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account) {
        return view('account.edit', [
            'account' => $account,
            'teams' => Team::all()
        ]);
    }

    /**
     * Update the specified account in storage
     *
     * @param  \App\Http\Requests\AccountRequest  $request
     * @param  \App\Account  $account
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(AccountRequest $request, Account $account) {
        $account->update($request->except('settings'));

        $settings = $request->settings;
        $defaults = Defaults::for('accounts');
        foreach ($defaults as $key => $value) {
            $setting = Setting::where('default_id', $value->id)
                ->where('account_id', $account->id)->first();
            if ($setting) $setting->update(['value' => $settings[$key] ?? 0]);
            else Setting::create([
                'value' => $settings[$key] ?? $value->default(),
                'account_id' => $account->id,
                'default_id' => $value->id
            ]);
        }

        return redirect()->route('account.index')->withStatus(__('Account successfully updated.'));
    }
}
