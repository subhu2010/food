<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Auth\{UserLoginController, UserRegisterController, UserForgotPasswordController,
		UserResetPasswordController, SocialiteLoginController, ConfirmPasswordController, VerificationController};
use App\Http\Controllers\User\{UserController};
use App\Http\Controllers\Website\{WebsiteController, CakeWebsiteController};


Route::get('/', function(){
    return view('site.pages.landing-page');
});


Route::get('old-item-list', function(){
    return view('site.pages.old-item-list');
});

Route::get('item-detail', function(){
    return view('site.pages.items-detail');
});

Route::get('old-item-detail', function(){
    return view('site.pages.old-items-detail');
});

Route::get('checkout-order', function(){
    return view('site.pages.checkout-order');
});

Route::get('checkout', function(){
    return view('site.pages.checkout');
});

Route::get('checkout-confirm', function(){
    return view('site.pages.checkout-confirm');
});

Route::get('checkout-surprise', function(){
    return view('site.pages.checkout-surprise');
});

Route::get('cart', function(){
    return view('site.pages.cart');
});

Route::get('about-us', function(){
    return view('site.pages.about-us');
});


Route::get('blog-list', function(){
    return view('site.pages.blog-list');
});

Route::get('foodonways-deals', function(){
    return view('site.pages.foodonways-deals');
});

Route::get('contact-us', function(){
    return view('site.pages.contact');
});

Route::get('faq', function(){
    return view('site.pages.faq');
});

Route::get('help-support', function(){
    return view('site.pages.help-support');
});
Route::get('terms-condition', function(){
    return view('site.pages.terms-condition');
});
Route::get('terms-policy', function(){
    return view('site.pages.terms-policy');
});


Route::get('cake-item-detail', function () {
    return view('site.cake.pages.cake-item-detail');
});

Route::get('cake-cart', function () {
    return view('site.cake.pages.cake-cart');
});

Route::get('cake-list', function () {
    return view('site.cake.pages.cake-list');
});


// user dashboard route
Route::get('user-dashboard', function () {
    return view('site.pages.user-dashboard.user-dashboard');
});


// user dashboard route
Route::get('user-login', function(){
	return view('site.pages.user-dashboard.user-login');
});
Route::get('user-dashboard', function () {
	return view('site.pages.user-dashboard.user-dashboard');
});


Route::group([], function($route){

	/*********************************** Route For Website Controller ********************************/
	$route->get("/", [WebsiteController::class, "landingPage"])
		->name("site.landingPage");

	$route->get("/category/{category}", [WebsiteController::class, "categoryDetail"])
		->name('site.categoryDetail');

	$route->get("/product/{slug}", [WebsiteController::class, "productDetail"])
		->name("site.productDetail");


	$route->get("/page/{slug}", [WebsiteController::class, "page"])
		->name("site.page");


	$route->get("/blog/{blog}", [WebsiteController::class, "blogDetail"])
		->name("site.blogDetail");


	/**********************************  Route For Cake Website Controller *****************************/
	$route->get("/cake", [CakeWebsiteController::class, "cakeLandingPage"])
		->name("site.cakeLandingPage");


	/**************************************** Socialite Login ******************************************/
	$route->get('login/{client}', [SocialiteLoginController::class, "redirect"])
		->name('user.social.login');

	$route->get('login/{client}/callback', [SocialiteLoginController::class, "callback"]);


	$route->group(['namespace' => 'User', "prefix" => "user", "as" => "user."], function($route){

		$route->group(["middleware" => "guest"], function($route){

			$route->get('login', [UserLoginController::class, "showLoginForm"])
				->name('login');

			$route->post('login', [UserLoginController::class, "login"])
				->name('loginProcess');

			$route->post('logout', [UserLoginController::class, "logout"])
				->name('logout');

			$route->get('register', [UserRegisterController::class, "showRegistrationForm"])
				->name('register');

			$route->post('register', [UserRegisterController::class, "register"])
				->name('registerProcess');
			

		

			/******************************* Route For UserController ***********************************/

			$route->get('password/reset', [UserForgotPasswordController::class, "showLinkRequestForm"])
				->name('showLinkRequestForm');

			$route->post('password/email', [UserForgotPasswordController::class, "sendResetLinkEmail"])
				->name('sendResetLinkEmail');

			$route->get('password/reset/{token}', [UserResetPasswordController::class, "showResetForm"])
				->name('showResetForm');

			$route->post('password/reset', [UserResetPasswordController::class, "reset"])
				->name('reset');

			// $route->get('password/confirm', [ConfirmPasswordController::class, "showConfirmForm"])
			// 	->name('password.confirm');

			// $route->post('password/confirm', [ConfirmPasswordController::class, "confirm"]);

			// $route->get('email/verify', [VerificationController::class, "show"])
			// 	->name('verification.notice');

			
		});

		// $route->get('email/verify/{id}/{hash}', [VerificationController::class, "verify"])
		// 	->name('verification.verify');

		// $route->post('email/resend', [VerificationController::class, "resend"])
		// 	->name('verification.resend');


		$route->group(["middleware" => "auth"], function($route){

			$route->get('/profile', [UserController::class, "profile"])
				->name('profile');

			$route->post('/profile', [UserController::class, "updateProfile"])
				->name('updateProfile');

			$route->get('/orders', [UserController::class, "orders"])
				->name('orders');

			$route->get('/reviews', [UserController::class, "reviews"])
				->name('reviews');

			$route->get('/wishlist', [UserController::class, "wishlist"])
				->name('wishlist');

			$route->get('/cartlist', [UserController::class, "cartlist"])
				->name('cartlist');

			$route->get('/history', [UserController::class, "history"])
				->name('history');

			$route->get('/dashboard', [UserController::class, "dashboard"])
				->name('dashboard');

			$route->get('profile', [UserController::class, "profile"])
				->name('profile');

			$route->post('/change-password', [UserLoginController::class, "changePassword"])
				->name('changePassword');

			$route->post('/logout', [UserLoginController::class, "logout"])
				->name('logout');



			$route->get("/checkout-confirm", [UserController::class, "checkoutConfirm"])
				->name("checkoutConfirm");


		});


	});

});
