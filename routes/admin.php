<?php

use App\Http\Controllers\Admin\TicketController;
use Illuminate\Support\Facades\Route;

Route::get('user/login', 'User\Auth\UserLoginController@showLoginForm')
	->name('login');

Route::group(["namespace" => "Admin", "as" => "admin."], function ($route) {

	$route->get('/', 'Auth\AdminLoginController@login')
		->name('login');

	$route->post('/', 'Auth\AdminLoginController@loginProcess')
		->name('loginProcess');

	$route->get('/logout', 'Auth\AdminLoginController@logout')
		->name('logout');

	$route->post('/change-password', 'Auth\AdminLoginController@changePassword')
		->name('changePassword');

	$route->get('/logout', 'Auth\AdminLoginController@logout')
		->name('logout');


	/********************************** Admin Password Reset Route ********************************/

	$route->get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')
		->name('showLinkRequestForm');

	$route->post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')
		->name('sendResetLinkEmail');

	$route->get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')
		->name('showResetForm');

	$route->post('/password/reset', 'Auth\AdminResetPasswordController@reset')
		->name('reset');


	/********************************** Admin Route ********************************/
	$route->get('/dashboard', 'AdminController@dashboard')
		->name('dashboard');

	$route->get('/profile', 'AdminController@profile')
		->name('profile');

	$route->post('/profile', 'AdminController@profileUpdate')
		->name('profileUpdate');

	$route->get('/admin-list', 'AdminController@adminList')
		->name('adminList');

	$route->get('/add-admin', 'AdminController@addAdmin')
		->name('addAdmin');

	$route->post('/add-admin', 'AdminController@addAdminProcess')
		->name('addAdminProcess');

	$route->get('/edit-admin/{id}', 'AdminController@editAdmin')
		->name('editAdmin');

	$route->post('/edit-admin/{id}', 'AdminController@editAdminProcess')
		->name('editAdminProcess');

	$route->post('/delete-admin', 'AdminController@deleteAdmin')
		->name('deleteAdmin');

	$route->get('/setting', 'AdminController@editSetting')
		->name('editSetting');

	$route->post('/setting', 'AdminController@editSettingProcess')
		->name('editSettingProcess');



	/******************************* Route For The Roles And Permission *****************************/

	$route->get('/roles-list', 'Auth\RolesAndPermissionsController@rolesList')
		->name('rolesList');

	$route->get('/add-roles', 'Auth\RolesAndPermissionsController@addRoles')
		->name('addRoles');

	$route->post('/add-roles', 'Auth\RolesAndPermissionsController@addRoleProcess')
		->name('addRoleProcess');

	$route->get('/edit-role/{id}', 'Auth\RolesAndPermissionsController@editRole')
		->name('editRole');

	$route->post('/edit-role/{id}', 'Auth\RolesAndPermissionsController@editRoleProcess')
		->name('editRoleProcess');

	$route->post('/delete-roles', 'Auth\RolesAndPermissionsController@deleteRoles')
		->name('deleteRoles');

	// $route->post('/role/{id}/assign', 'Auth\RolesAndPermissionsController@assignRolesProcess')
	// ->name('assignRolesProcess');

	// $route->post('/role/{id}/assign', 'Auth\RolesAndPermissionsController@assignRolesProcess')
	// ->name('assignRolesProcess');

	$route->get('/roles/{id}/assign', 'Auth\RolesAndPermissionsController@assignRoles')
		->name('assignRoles');

	$route->post('/roles/{id}/assign', 'Auth\RolesAndPermissionsController@assignRolesProcess')
		->name('assignRolesProcess');

	$route->get('/permissions/{id}/assign', 'Auth\RolesAndPermissionsController@assignPermissions')
		->name('assignPermissions');

	$route->post('/permissions/{id}/assign', 'Auth\RolesAndPermissionsController@assignPermissionsProcess')
		->name('assignPermissionsProcess');




	$route->get('/permission-list', 'Auth\RolesAndPermissionsController@permissionList')
		->name('permissionList');

	$route->get('/add-permission', 'Auth\RolesAndPermissionsController@addPermission')
		->name('addPermission');

	$route->post('/add-permission', 'Auth\RolesAndPermissionsController@addPermissionProcess')
		->name('addPermissionProcess');

	$route->get('/edit-permission/{id}', 'Auth\RolesAndPermissionsController@editPermission')
		->name('editPermission');

	$route->post('/edit-permission/{id}', 'Auth\RolesAndPermissionsController@editPermissionProcess')
		->name('editPermissionProcess');

	$route->post('/delete-permission', 'Auth\RolesAndPermissionsController@deletePermission')
		->name('deletePermission');

	// Admin Backend Routes
	$route->get('/ticket', [TicketController::class, 'getAllTicket'])->name('ticket.index');
	$route->delete('/ticket/{ticket_id}', [TicketController::class, 'deleteTicket'])->name('ticket.delete');
	$route->resource('/banner', BannerController::class);
	$route->resource('/staff', StaffController::class);
	$route->resource('/product', ProductController::class);
	$route->resource('/menu', MenuController::class);
	$route->resource('/customer', CustomerController::class);
	$route->resource('/cake', CakeController::class);
	$route->resource('/cakebanner', CakeBannerController::class);
});
