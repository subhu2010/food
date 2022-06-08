<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('site.pages.landing-page');
});

Route::get('item-list', function () {
    return view('site.pages.item-list');
});

Route::get('old-item-list', function () {
    return view('site.pages.old-item-list');
});

Route::get('item-detail', function () {
    return view('site.pages.items-detail');
});

Route::get('old-item-detail', function () {
    return view('site.pages.old-items-detail');
});

Route::get('checkout-order', function () {
    return view('site.pages.checkout-order');
});

Route::get('checkout-confirm', function () {
    return view('site.pages.checkout-confirm');
});


// user dashboard route
Route::get('user-login', function () {
	return view('site.pages.user-dashboard.user-login');
});
Route::get('user-dashboard', function () {
	return view('site.pages.user-dashboard.user-dashboard');
});

Route::get("/", "Website\WebsiteController@landingPage")
	->name("landingPage");

Route::group([], function ($route) {
	// Socialite 
	$route->get('login/{client}', 'User\Auth\SocialiteLoginController@redirect')
		->name('user.social.login');

	$route->get('login/{client}/callback', 'User\Auth\SocialiteLoginController@callback');

	$route->group(['namespace' => 'User', "prefix" => "user", "as" => "user."], function ($route) {

		$route->group(["middleware" => "guest"], function ($route) {

			$route->get('login', 'Auth\UserLoginController@showLoginForm')
				->name('login');

			$route->post('login', 'Auth\UserLoginController@login')
				->name('loginProcess');

			$route->post('logout', 'Auth\UserLoginController@logout')
				->name('logout');

			$route->get('register', 'Auth\UserRegisterController@showRegistrationForm')
				->name('register');

			$route->post('register', 'Auth\UserRegisterController@register')
				->name('registerProcess');
			$route->post('/change-password', 'Auth\UserLoginController@changePassword')
				->name('changePassword');

			$route->get('/logout', 'Auth\UserLoginController@logout')
				->name('logout');


			/********************************************************************** Route For UserController ********************************************************/

			$route->get('password/reset', 'Auth\UserForgotPasswordController@showLinkRequestForm')
				->name('showLinkRequestForm');

			$route->post('password/email', 'Auth\UserForgotPasswordController@sendResetLinkEmail')
				->name('sendResetLinkEmail');

			$route->get('password/reset/{token}', 'Auth\UserResetPasswordController@showResetForm')
				->name('showResetForm');

			$route->post('password/reset', 'Auth\UserResetPasswordController@reset')
				->name('reset');

			// $route->get('password/confirm', 'Auth\ConfirmPasswordController@showConfirmForm')
			// 	->name('password.confirm');

			// $route->post('password/confirm', 'Auth\ConfirmPasswordController@confirm');

			// $route->get('email/verify', 'Auth\VerificationController@show')
			// 	->name('verification.notice');
			$route->get('/profile', 'UserController@profile')
				->name('profile');

			$route->post('/profile', 'UserController@updateProfile')
				->name('updateProfile');

			$route->get('/my-orders', 'UserController@myOrders')
				->name('myOrders');

			$route->get('/my-reviews', 'UserController@myReviews')
				->name('myReviews');

			$route->get('/my-wishlist', 'UserController@myWishlist')
				->name('myWishlist');

			$route->get('/history', 'UserController@history')
				->name('history');
		});

		// $route->get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')
		// 	->name('verification.verify');

		// $route->post('email/resend', 'Auth\VerificationController@resend')
		// 	->name('verification.resend');


		$route->group(["middleware" => "auth"], function ($route) {


			$route->get('/dashboard', 'UserController@dashboard')
				->name('dashboard');

			$route->get('profile', 'UserController@profile')
				->name('profile');

			$route->post('/change-password', 'Auth\UserLoginController@changePassword')
				->name('changePassword');

			$route->get('/logout', 'Auth\UserLoginController@logout')
				->name('logout');
		});

	});

});
