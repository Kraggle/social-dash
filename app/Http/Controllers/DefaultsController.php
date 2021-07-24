<?php

namespace App\Http\Controllers;

use App\Models\Defaults;
use App\Http\Requests\DefaultRequest;

class DefaultsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Defaults $model) {
        $this->authorize('manage-defaults', User::class);

        return view('default.index', ['defaults' => $model->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $this->authorize('manage-defaults', User::class);

        return view('default.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\DefaultRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DefaultRequest $request, Defaults $model) {
        $model->create($request->all());
        return redirect()->route('default.index')->withStatus(__('Default successfully created.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Defaults  $defaults
     * @return \Illuminate\Http\Response
     */
    public function edit(Defaults $default) {
        return view('default.edit', ['default' => $default]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Defaults  $defaults
     * @return \Illuminate\Http\Response
     */
    public function update(DefaultRequest $request, Defaults $default) {
        $default->update($request->all());
        return redirect()->route('default.index')->withStatus(__('Default successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Defaults  $defaults
     * @return \Illuminate\Http\Response
     */
    public function destroy(Defaults $default) {
        $this->authorize('manage-defaults', User::class);

        $default->delete();
        return redirect()->route('default.index')->withStatus(__('Default successfully deleted.'));
    }
}
