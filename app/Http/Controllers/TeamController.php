<?php

namespace App\Http\Controllers;

use App\Team;
use App\Package;
use App\Http\Requests\TeamRequest;
use Illuminate\Http\Request;

class TeamController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Team $model) {
        // $this->authorize('manage-teams', User::class);

        return view('team.index', ['teams' => $model->all()]);
    }

    /**
     * Show the form for creating a new team
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        $this->authorize('manage-teams', User::class);
        return view('team.create', ['packages' => Package::all()]);
    }

    /**
     * Store a newly created team in storage
     *
     * @param  \App\Http\Requests\TeamRequest  $request
     * @param  \App\Team  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(TeamRequest $request, Team $model) {
        $model->create($request->all());
        return redirect()->route('team.index')->withStatus(__('Team successfully created.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team) {
        return view('team.edit', ['team' => $team, 'packages' => Package::all()]);
    }

    /**
     * Update the specified team in storage
     *
     * @param  \App\Http\Requests\TeamRequest  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(TeamRequest $request, Team $team) {
        $team->update($request->all());

        return redirect()->route('team.index')->withStatus(__('Team successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team) {
        $this->authorize('manage-teams', User::class);

        $team->delete();
        return redirect()->route('team.index')->withStatus(__('Team successfully deleted.'));
    }
}
