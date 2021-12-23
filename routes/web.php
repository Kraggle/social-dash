<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Route::get('/welcome', function () {
    return view('home');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home')->middleware('subscribed');
Route::get('dashboard', 'HomeController@index')->name('home')->middleware('subscribed');
Route::get('pricing', 'ExamplePagesController@pricing')->name('page.pricing');
Route::get('lock', 'ExamplePagesController@lock')->name('page.lock');

Route::group(['middleware' => 'auth'], function () {
    // TODO: Redirect if already subscribed
    // TODO: Setup change subscription
    Route::get('subscription', ['as' => 'auth.subscription', 'uses' => 'SubscriptionController@index']);
    Route::post('/subscribe', ['as' => 'subscription.store', 'uses' => 'SubscriptionController@store']);

    Route::post('/keep-alive', function () {
        return response()->json(['alive' => true]);
    });
});

Route::middleware(['auth', 'subscribed'])->group(function () {
    Route::resource('account', 'AccountController', ['except' => ['show']]);
    Route::resource('role', 'RoleController', ['except' => ['show', 'destroy']]);
    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::resource('default', 'DefaultsController', ['except' => ['show']]);
    // Route::resource('post', 'PostsController', ['except' => ['show']]);
    Route::resource('team', 'TeamController', ['except' => ['show']]);
    Route::resource('package', 'PackageController', ['except' => ['show', 'destroy']]);

    Route::resource('member', 'MemberController', ['except' => ['show']]);

    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

    // Pages
    Route::get('posts', ['as' => 'pages.posts', 'uses' => 'PagesController@posts']);
    Route::get('likes', ['as' => 'pages.likes', 'uses' => 'PagesController@likes']);
    Route::get('comments', ['as' => 'pages.comments', 'uses' => 'PagesController@comments']);
    Route::get('followers', ['as' => 'pages.followers', 'uses' => 'PagesController@followers']);
    Route::get('demographics', ['as' => 'pages.demographics', 'uses' => 'PagesController@demographics']);

    Route::get('hashtags', ['as' => 'pages.hashtags', 'uses' => 'PagesController@hashtags']);
    Route::get('hashtag-generator', ['as' => 'pages.hashtag-generator', 'uses' => 'PagesController@hashtagGenerator']);

    Route::get('post', ['as' => 'pages.post', 'uses' => 'PagesController@post']);
    Route::get('compare-posts', ['as' => 'pages.compare-posts', 'uses' => 'PagesController@comparePosts']);
    Route::get('single-profile', ['as' => 'pages.single-profile', 'uses' => 'PagesController@singleProfile']);

    Route::get('scheduling', ['as' => 'pages.scheduling', 'uses' => 'PagesController@scheduling']);
    Route::get('reporting', ['as' => 'pages.reporting', 'uses' => 'PagesController@reporting']);
    Route::get('support', ['as' => 'page.support', 'uses' => 'PagesController@support']);

    // Example Pages
    Route::get('test', ['as' => 'page.test', 'uses' => 'ExamplePagesController@test']);
    Route::get('widgets', ['as' => 'page.widgets', 'uses' => 'ExamplePagesController@widgets']);

    Route::get('buttons', ['as' => 'page.buttons', 'uses' => 'ComponentPagesController@buttons']);
    Route::get('grid-system', ['as' => 'page.grid', 'uses' => 'ComponentPagesController@grid']);
    Route::get('panels', ['as' => 'page.panels', 'uses' => 'ComponentPagesController@panels']);
    Route::get('typography', ['as' => 'page.typography', 'uses' => 'ComponentPagesController@typography']);

    Route::get('regular-tables', ['as' => 'page.regular-tables', 'uses' => 'TablePagesController@regularTables']);
    Route::get('extended-tables', ['as' => 'page.extended-tables', 'uses' => 'TablePagesController@extendedTables']);
    Route::get('datatable-tables', ['as' => 'page.datatable-tables', 'uses' => 'TablePagesController@datatableTables']);

    Route::get('regular-form', ['as' => 'page.regular-forms', 'uses' => 'FormPagesController@regularForms']);
    Route::get('extended-form', ['as' => 'page.extended-forms', 'uses' => 'FormPagesController@extendedForms']);
    Route::get('validation-form', ['as' => 'page.validation-forms', 'uses' => 'FormPagesController@validationForms']);
});
