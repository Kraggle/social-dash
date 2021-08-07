<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Helpers\AppHelper;
use App\Mail\MemberInvite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MemberController extends Controller {
    /**
     * Open the new member registration page.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create() {
        return view('team.member.create');
    }

    /**
     * Send a registration email to a new member.
     *
     * @param  Illuminate\Http\Request  $request
     * @param  \App\Models\User  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request) {
        $validated = $request->validate([
            'email' => 'required|max:255|email'
        ]);

        $email = $request->email;

        do {
            $token = AppHelper::generateToken();
        } while (DB::table('register_tokens')->where('token', $token)->first());

        DB::table('register_tokens')->insert([
            'email' => $email,
            'token' => $token,
            'team_id' => auth()->user()->team->id,
            'role_id' => 4,
            'valid_until' => AppHelper::timestamp('+2 days')
        ]);

        Mail::to($email)->send(new MemberInvite($token, auth()->user()->team));

        return redirect()->route('team.index')->withStatus(__('Invite successfully sent.'));
    }

    /**
     * Edit the premissions of the given member.
     *
     * @param \App\Models\User  $member
     * @return \Illuminate\View\View
     */
    public function edit(User $member) {
        return view('team.member.edit', ['member' => $member]);
    }

    /**
     * Update the specified team member in storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $member
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, User $member) {
        $member->update(['permission' => $request->permission]);

        return redirect()->route('team.index')->withStatus(__('Member permissions successfully updated.'));
    }

    /**
     * Remove the specified team member.
     *
     * @param  \App\Models\User $member
     * @return \Illuminate\Http\Response
     */
    public function remove(User $member) {
        // $this->authorize('manage-teams', User::class);

        // $member->delete();
        // return redirect()->route('team.index')->withStatus(__('Team successfully deleted.'));
    }
}
