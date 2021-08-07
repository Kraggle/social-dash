<?php

namespace App\Http\Controllers;

class CoryPagesController extends Controller {
    /**
     * Display the likes page
     *
     * @return \Illuminate\View\View
     */
    public function likes() {
        return view('pages.likes');
    }

    /**
     * Display the comments page
     *
     * @return \Illuminate\View\View
     */
    public function comments() {
        return view('pages.comments');
    }

    /**
     * Display the posts page
     *
     * @return \Illuminate\View\View
     */
    public function posts() {
        return view('pages.posts');
    }

    /**
     * Display the scheduling page
     *
     * @return \Illuminate\View\View
     */
    public function scheduling() {
        return view('pages.scheduling');
    }

    /**
     * Display the followers page
     *
     * @return \Illuminate\View\View
     */
    public function followers() {
        return view('pages.followers');
    }

    /**
     * Display the reporting page
     *
     * @return \Illuminate\View\View
     */
    public function demographics() {
        return view('pages.demographics');
    }


    /**
     * Display the reporting page
     *
     * @return \Illuminate\View\View
     */
    public function reporting() {
        return view('pages.reporting');
    }

    /**
     * Display the hashtags page
     *
     * @return \Illuminate\View\View
     */
    public function hashtags() {
        return view('pages.hashtags');
    }

    /**
     * Display the hashtag-generator page
     *
     * @return \Illuminate\View\View
     */
    public function hashtagGenerator() {
        return view('pages.hashtag-generator');
    }

    /**
     * Display the post page
     *
     * @return \Illuminate\View\View
     */
    public function post() {
        return view('pages.post');
    }


    /**
     * Display the compare-posts page
     *
     * @return \Illuminate\View\View
     */
    public function comparePosts() {
        return view('pages.compare-posts');
    }


    /**
     * Display the single-profile page
     *
     * @return \Illuminate\View\View
     */
    public function singleProfile() {
        return view('pages.single-profile');
    }
}
