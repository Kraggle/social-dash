<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\http\Requests\PackageRequest;
use Illuminate\Http\Request;

class PackageController extends Controller {
    public function __construct() {
        // $this->authorizeResource(Package::class);
    }

    /**
     * Display a listing of the packages
     *
     * @param \App\Models\Package  $model
     * @return \Illuminate\View\View
     */
    public function index(Package $model) {
        $this->authorize('manage-packages', User::class);

        return view('packages.index', ['packages' => $model->all()]);
    }

    /**
     * Show the form for creating a new package
     *
     * @return \Illuminate\View\View
     */
    public function create() {
        return view('packages.create');
    }

    /**
     * Store a newly created package in storage
     *
     * @param  \App\Http\Requests\PackageRequest  $request
     * @param  \App\Models\Package  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PackageRequest $request, Package $model) {
        $model->create($request->all());

        return redirect()->route('package.index')->withStatus(__('Package successfully created.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package) {
        return view('packages.edit', ['package' => $package]);
    }

    /**
     * Update the specified package in storage
     *
     * @param  \App\Http\Requests\PackageRequest  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PackageRequest $request, Package $package) {
        $package->update($request->all());

        return redirect()->route('package.index')->withStatus(__('Package successfully updated.'));
    }
}
