<?php

namespace App\Http\Controllers;

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
    public function scheduling() {
        return view('pages.cory.scheduling');
    }

    /**
     * Display the followers page
     *
     * @return \Illuminate\View\View
     */
    public function followers() {
        return view('pages.cory.followers');
    }

    /**
     * Display the reporting page
     *
     * @return \Illuminate\View\View
     */
    public function demographics() {
        return view('pages.cory.demographics');
    }


    /**
     * Display the reporting page
     *
     * @return \Illuminate\View\View
     */
    public function reporting() {
        return view('pages.cory.reporting');
    }

    /**
     * Display the hashtags page
     *
     * @return \Illuminate\View\View
     */
    public function hashtags() {
        return view('pages.cory.hashtags');
    }

    /**
     * Display the hashtag_generator page
     *
     * @return \Illuminate\View\View
     */
    public function hashtag_generator() {
        return view('pages.cory.hashtag_generator');
    }

    /**
     * Display the individualpost page
     *
     * @return \Illuminate\View\View
     */
    public function individualpost(Item $model) {
        return view('pages.cory.individualpost', ['items' => $model->with(['tags', 'category'])->get()]);
    }


    /**
     * Display the compareposts page
     *
     * @return \Illuminate\View\View
     */
    public function compareposts(Item $model) {
        return view('pages.cory.compareposts', ['items' => $model->with(['tags', 'category'])->get()]);
    }


    /**
     * Display the singleprofile page
     *
     * @return \Illuminate\View\View
     */
    public function singleprofile(Item $model) {
        return view('pages.cory.singleprofile', ['items' => $model->with(['tags', 'category'])->get()]);
    }
}
