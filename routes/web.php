<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Middleware options can be located in `app/Http/Kernel.php`
|
*/

// Homepage Route
Route::group(['namespace' => 'Site'], function(){
    Route::get('/', 'HomeController@index');
    Route::get('home', 'HomeController@index');
    Route::get('contact', 'ContactController@index');
    Route::get('adv/{id}', 'AdvertisementController@get');
});


// Authentication Routes
Auth::routes();

Route::group(['prefix' => 'admin', 'namespace' => 'Admin\Auth'], function(){
    Route::get('login', ['as' => 'admin_login', 'uses' => 'LoginController@showLoginForm']);
    Route::post('login', [ 'uses' => 'LoginController@login']);
});

// Admin Routes
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'activated']], function(){

    Route::get('/', ['uses' => 'HomeController@index']);
    Route::get('home', ['uses' => 'HomeController@index']);

    Route::resource('advertisements', 'AdvertisementCrudController');
    //Route::resource('categories', 'CategoryCrudController');
    CRUD::resource('categories', 'CategoryCrudController');
    CRUD::resource('stores', 'StoreCrudController');
    CRUD::resource('users_manage', 'UserCrudController');
});

// Registered, activated, and is admin routes.
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware'=> ['auth', 'activated', 'role:admin']], function () {

    Route::resource('/users/deleted', 'SoftDeletesController', [
        'only' => [
            'index', 'show', 'update', 'destroy',
        ]
    ]);

    Route::resource('users', 'UsersManagementController', [
        'names' => [
            'index' => 'users',
            'destroy' => 'user.destroy'
        ],
        'except' => [
            'deleted'
        ]
    ]);
    
    Route::get('routes', 'AdminDetailsController@listRoutes');
});



// Public Routes
Route::group(['middleware' => 'web'], function() {

    // Activation Routes
    Route::get('/activate', ['as' => 'activate', 'uses' => 'Auth\ActivateController@initial']);

    Route::get('/activate/{token}', ['as' => 'authenticated.activate', 'uses' => 'Auth\ActivateController@activate']);
    Route::get('/activation', ['as' => 'authenticated.activation-resend', 'uses' => 'Auth\ActivateController@resend']);
    Route::get('/exceeded', ['as' => 'exceeded', 'uses' => 'Auth\ActivateController@exceeded']);

    // Socialite Register Routes
    Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'Auth\SocialController@getSocialRedirect']);
    Route::get('/social/handle/{provider}', ['as' => 'social.handle', 'uses' => 'Auth\SocialController@getSocialHandle']);

    // Route to for user to reactivate their user deleted account.
    Route::get('/re-activate/{token}', ['as' => 'user.reactivate', 'uses' => 'RestoreUserController@userReActivate']);

});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated']], function() {

    // Activation Routes
    Route::get('/activation-required', ['uses' => 'Auth\ActivateController@activationRequired'])->name('activation-required');
    // Route::get('/logout', ['uses' => 'Auth\LoginController@logout'])->name('logout');

    //  Homepage Route - Redirect based on user role is in controller.
    Route::get('/profile', ['as' => 'public.home',   'uses' => 'UserController@index']);

    // Show users profile - viewable by other users.
    Route::get('profile/{username}', [
        'as'        => '{username}',
        'uses'      => 'ProfilesController@show'
    ]);

});



// Registered, activated, and is current user routes.
Route::group(['middleware'=> ['auth', 'activated', 'currentUser']], function () {

    // User Profile and Account Routes
    Route::resource(
        'profile',
        'ProfilesController', [
            'only'  => [
                'show',
                'edit',
                'update',
                'create'
            ]
        ]
    );
    Route::put('profile/{username}/updateUserAccount', [
        'as'        => '{username}',
        'uses'      => 'ProfilesController@updateUserAccount'
    ]);
    Route::put('profile/{username}/updateUserPassword', [
        'as'        => '{username}',
        'uses'      => 'ProfilesController@updateUserPassword'
    ]);
    Route::delete('profile/{username}/deleteUserAccount', [
        'as'        => '{username}',
        'uses'      => 'ProfilesController@deleteUserAccount'
    ]);

    // Route to show user avatar
    Route::get('images/profile/{id}/avatar/{image}', [
        'uses'      => 'ProfilesController@userProfileAvatar'
    ]);

    // Route to upload user avatar.
    Route::post('avatar/upload', ['as' => 'avatar.upload', 'uses' => 'ProfilesController@upload']);

});

// Registered, activated, and is admin routes.
Route::group(['prefix' => 'admin', 'middleware'=> ['auth', 'activated', 'role:admin']], function () {

  

    Route::resource('themes', 'ThemesManagementController', [
        'names' => [
            'index' => 'themes',
            'destroy' => 'themes.destroy'
        ]
    ]);

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('php', 'AdminDetailsController@listPHPInfo');


});

Route::group(['middleware' => ['auth', 'activated']], function() {

    Route::get('/profile', ['as' => 'public.home',   'uses' => 'Site\UserProfileController@index']);
    Route::get('/logout', ['uses' => 'Auth\LoginController@logout'])->name('logout');
});