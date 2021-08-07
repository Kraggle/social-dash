<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Http\Requests\AccountRequest;
use App\Models\Team;
use App\Models\Defaults;
use App\Models\Setting;

class AccountController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the accounts
     *
     * @param \App\Models\Account  $model
     * @return \Illuminate\View\View
     */
    public function index(Account $model) {
        return view('account.index', ['accounts' => $model->all()]);
    }

    /**
     * Create an account for a team.
     *
     * @return \Illuminate\View\View
     */
    public function create() {
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

        $team_id = auth()->user()->team->id;
        if ($request->team_id) $team_id = $request->team_id;

        $settings = $request->settings;

        $price_id = $settings['follower_freq'];
        $quantity = ceil($request->followers / 5e4 ?? 1);

        $model = Account::create($request->merge([
            'team_id' => $team_id,
            'quantity' => $quantity,
            'price_id' => $price_id
        ])->except(['settings', 'followers']));

        $defaults = Defaults::for('accounts');
        foreach ($settings as $key => $value) {
            Setting::create([
                'value' => $value ?? 0,
                'account_id' => $model->id,
                'default_id' => $defaults->$key->id
            ]);
        }

        $team = Team::where('id', $team_id)->first();
        $team->newSubscription($request->username, ['price_1JEZ3NAy9PNycxnJ9fMA6x8u', $price_id])
            ->quantity($quantity, $price_id)->add();

        // TODO:: Check that the payment was successful, then...
        // TODO:: Send a webhook to the scraper to start the scrape

        return redirect()->route('account.index')->withStatus(__('Account successfully added.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
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
     * @param  \App\Models\Account  $account
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

        // TODO: Change the subscription if it was changed
        // TODO: Cancel the subscription if necessary

        return redirect()->route('account.index')->withStatus(__('Account successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account) {
        $this->authorize('remove-account', [$account->team, User::class]);

        $account->delete();

        // TODO: cancel and remove the subscription when deleting the account

        return redirect()->route('account.index')->withStatus(__('Account successfully deleted.'));
    }
}
