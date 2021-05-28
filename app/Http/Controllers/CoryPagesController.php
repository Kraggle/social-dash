<?php

namespace App\Http\Controllers;
use App\Item;

class CoryPagesController extends Controller {
    /**
     * Display the likes page
     *
     * @return \Illuminate\View\View
     */
    public function likes() {
        return view('pages.cory.likes');
    }

    /**
     * Display the comments page
     *
     * @return \Illuminate\View\View
     */
    public function comments() {
        return view('pages.cory.comments');
    }

    /**
     * Display the posts page
     *
     * @return \Illuminate\View\View
     */
    public function posts() {
        return view('pages.cory.posts');
    }

    /**
     * Display the scheduling page
     *
     * @return \Illuminate\View\View
     */
    public function scheduling(Item $model) {
        return view('pages.cory.scheduling', ['items' => $model->with(['tags', 'category'])->get()]);
    }

    /**
     * Display the followers page
     *
     * @return \Illuminate\View\View
     */
    public function followers(Item $model) {
        return view('pages.cory.followers', ['items' => $model->with(['tags', 'category'])->get()]);
    }

    /**
     * Display the reporting page
     *
     * @return \Illuminate\View\View
     */
    public function demographics(Item $model) {
        return view('pages.cory.demographics', ['items' => $model->with(['tags', 'category'])->get()]);
    }


    /**
     * Display the reporting page
     *
     * @return \Illuminate\View\View
     */
    public function reporting(Item $model) {
        return view('pages.cory.reporting', ['items' => $model->with(['tags', 'category'])->get()]);
    }

    /**
     * Display the hashtags page
     *
     * @return \Illuminate\View\View
     */
    public function hashtags(Item $model) {
        return view('pages.cory.hashtags', ['items' => $model->with(['tags', 'category'])->get()]);
    }

    /**
     * Display the hashtag_generator page
     *
     * @return \Illuminate\View\View
     */
    public function hashtag_generator(Item $model) {
        return view('pages.cory.hashtag_generator', ['items' => $model->with(['tags', 'category'])->get()]);
    }
}
