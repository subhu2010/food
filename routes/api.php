<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::fallback(function () {
	return response()->json([
		"success" => false,
		"message" => "Page Not Found. If error persists, contact info@foodonways.com"
	], 404);
});


Route::group(['as' => 'api.', 'namespace' => 'API'], function ($route) {

	$route->post('/ask-otp', 'UserLoginController@askOTP')
		->name('askOTP');

	$route->post('/verify-otp', 'UserLoginController@verifyOTP')
		->name('verifyOTP');

	$route->post('/phone-register', 'UserLoginController@phoneRegister')
		->name('phoneRegister');

	$route->post('/phone-login', 'UserLoginController@phoneLogin')
		->name('phoneLogin');


	$route->post("login/{client}", "SocialiteLoginController@redirect")
		->name("socialLogin");

	$route->post("login/{client}/callback", "SocialiteLoginController@callback");

	// Mobile Device Routes
	$route->get('/dashboard', [DashboardController::class, 'dashboard']);
	$route->get('/product', [DashboardController::class, 'products']);
	$route->get('/product/{product_id}', [DashboardController::class, 'productById']);
	$route->get('/cake',[DashboardController::class,'cakes']);
	$route->get('/cake/{cake_id}',[DashboardController::class,'cakeById']);

	// Mobile Routes that requires Auth
	$route->group(["middleware" => "auth:sanctum"], function ($route) {

		$route->post("/logout", "UserLoginController@logout")
			->name("logout");

		$route->post("/profile", "UserLoginController@profile")
			->name("profile");
		$route->resource('user', UserController::class);
	});
});
