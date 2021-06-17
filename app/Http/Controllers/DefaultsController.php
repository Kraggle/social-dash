<?php

namespace App\Http\Controllers;

use App\Defaults;
use App\Http\Requests\DefaultRequest;

class DefaultsController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Defaults $model) {
        return view('default.index', ['defaults' => $model->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('default.create');
    }

    /**
     * Build the request into the database safe key values.
     *
     * @param assoc $attributes The attributes.
     * @return array The final array.
     */
    private function buildFinal($attributes) {
        $final = ['options' => []];
        if ($attributes['type'] == 'text')
            $final['options']['values'] = [];
        foreach ($attributes as $key => $value) {
            if (in_array($key, ['_token', '_method', 'name', 'description', 'for_table']))
                $final[$key] = $value;
            elseif (preg_match('/^(\w+)_(\d+)$/', $key, $match)) {
                $i = $match[2];
                $key = $match[1];
                if (!isset($final['options']['values'][$i]))
                    $final['options']['values'][$i] = [];
                $final['options']['values'][$i][$key] = $value;
            } else $final['options'][$key] = $value;
        }
        $final['options'] = json_encode($final['options']);
        return $final;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\DefaultRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DefaultRequest $request, Defaults $model) {
        $model->create($this->buildFinal($request->all()));
        return redirect()->route('default.index')->withStatus(__('Default successfully created.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Defaults  $defaults
     * @return \Illuminate\Http\Response
     */
    public function edit(Defaults $default) {
        $default['options'] = json_decode($default['options']);
        return view('default.edit', ['default' => $default]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Defaults  $defaults
     * @return \Illuminate\Http\Response
     */
    public function update(DefaultRequest $request, Defaults $default) {
        $default->update($this->buildFinal($request->all()));
        return redirect()->route('default.index')->withStatus(__('Default successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Defaults  $defaults
     * @return \Illuminate\Http\Response
     */
    public function destroy(Defaults $default) {
        $default->delete();
        return redirect()->route('default.index')->withStatus(__('Default successfully deleted.'));
    }
}
