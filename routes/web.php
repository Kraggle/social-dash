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
    Route::get('single-profile', ['as' => 'pages.single-profile', 'uses' => 'PagesController@single-profile']);

    Route::get('scheduling', ['as' => 'pages.scheduling', 'uses' => 'PagesController@scheduling']);
    Route::get('reporting', ['as' => 'pages.reporting', 'uses' => 'PagesController@reporting']);
    Route::get('support', ['as' => 'page.support', 'uses' => 'PagesController@support']);

    // Example Pages
    Route::get('widgets', ['as' => 'page.widgets', 'uses' => 'ExamplePagesController@widgets']);
    Route::get('charts', ['as' => 'page.charts', 'uses' => 'ExamplePagesController@charts']);
    Route::get('calendar', ['as' => 'page.calendar', 'uses' => 'ExamplePagesController@calendar']);

    Route::get('buttons', ['as' => 'page.buttons', 'uses' => 'ComponentPagesController@buttons']);
    Route::get('grid-system', ['as' => 'page.grid', 'uses' => 'ComponentPagesController@grid']);
    Route::get('panels', ['as' => 'page.panels', 'uses' => 'ComponentPagesController@panels']);
    Route::get('sweet-alert', ['as' => 'page.sweet-alert', 'uses' => 'ComponentPagesController@sweetAlert']);
    Route::get('notifications', ['as' => 'page.notifications', 'uses' => 'ComponentPagesController@notifications']);
    Route::get('icons', ['as' => 'page.icons', 'uses' => 'ComponentPagesController@icons']);
    Route::get('typography', ['as' => 'page.typography', 'uses' => 'ComponentPagesController@typography']);

    Route::get('regular-tables', ['as' => 'page.regular_tables', 'uses' => 'TablePagesController@regularTables']);
    Route::get('extended-tables', ['as' => 'page.extended_tables', 'uses' => 'TablePagesController@extendedTables']);
    Route::get('datatable-tables', ['as' => 'page.datatable_tables', 'uses' => 'TablePagesController@datatableTables']);

    Route::get('regular-form', ['as' => 'page.regular_forms', 'uses' => 'FormPagesController@regularForms']);
    Route::get('extended-form', ['as' => 'page.extended_forms', 'uses' => 'FormPagesController@extendedForms']);
    Route::get('validation-form', ['as' => 'page.validation_forms', 'uses' => 'FormPagesController@validationForms']);
    Route::get('wizard-form', ['as' => 'page.wizard_forms', 'uses' => 'FormPagesController@wizardForms']);

    Route::get('google-maps', ['as' => 'page.google_maps', 'uses' => 'MapPagesController@googleMaps']);
    Route::get('fullscreen-maps', ['as' => 'page.fullscreen_maps', 'uses' => 'MapPagesController@fullscreenMaps']);
    Route::get('vector-maps', ['as' => 'page.vector_maps', 'uses' => 'MapPagesController@vectorMaps']);

<<<<<<< HEAD
    Route::get('auth', ['as' => 'test.auth', 'uses' => 'TestPagesController@auth']);

    Route::get('likes', ['as' => 'pages.cory.likes', 'uses' => 'CoryPagesController@likes']);
    Route::get('comments', ['as' => 'pages.cory.comments', 'uses' => 'CoryPagesController@comments']);
    Route::get('posts', ['as' => 'pages.cory.posts', 'uses' => 'CoryPagesController@posts']);
    Route::get('scheduling', ['as' => 'pages.cory.scheduling', 'uses' => 'CoryPagesController@scheduling']);
    Route::get('followers', ['as' => 'pages.cory.followers', 'uses' => 'CoryPagesController@followers']);
    Route::get('demographics', ['as' => 'pages.cory.demographics', 'uses' => 'CoryPagesController@demographics']);
    Route::get('reporting', ['as' => 'pages.cory.reporting', 'uses' => 'CoryPagesController@reporting']);
    Route::get('hashtags', ['as' => 'pages.cory.hashtags', 'uses' => 'CoryPagesController@hashtags']);
    Route::get('hashtag_generator', ['as' => 'pages.cory.hashtag_generator', 'uses' => 'CoryPagesController@hashtag_generator']);
    Route::get('individualpost', ['as' => 'pages.cory.individualpost', 'uses' => 'CoryPagesController@individualpost']);
    Route::get('compareposts', ['as' => 'pages.cory.compareposts', 'uses' => 'CoryPagesController@compareposts']);
    Route::get('singleprofile', ['as' => 'pages.cory.singleprofile', 'uses' => 'CoryPagesController@singleprofile']);
=======
    // Route::get('rtl-support', ['as' => 'page.rtl-support', 'uses' => 'ExamplePagesController@rtlSupport']);
>>>>>>> restructure
});
