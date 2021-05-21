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
}
