<?php

use App\Http\Controllers\User\Auth\{UserLoginController};
use App\Http\Controllers\Admin\Auth\{AdminLoginController, AdminForgotPasswordController, AdminResetPasswordController,
			RolesAndPermissionsController};
use App\Http\Controllers\Admin\{AdminController, TicketController, UserController};
use Illuminate\Support\Facades\Route;


Route::get('user/login', [UserLoginController::class, "showLoginForm"])
	->name('login');


Route::group(["namespace" => "Admin", "as" => "admin."], function ($route){

	$route->group(["middleware" => "guest:admin"], function($route){

		/********************************  Admin Login Route *****************************************/

		$route->get('/', [AdminLoginController::class, "login"])
			->name('login');

		$route->post('/', [AdminLoginController::class, "loginProcess"])
			->name('loginProcess');

		/********************************** Admin Password Reset Route ********************************/

		$route->get('/password/reset', [AdminForgotPasswordController::class, "showLinkRequestForm"])
			->name('showLinkRequestForm');

		$route->post('/password/email', [AdminForgotPasswordController::class, "sendResetLinkEmail"])
			->name('sendResetLinkEmail');

		$route->get('/password/reset/{token}', [AdminResetPasswordController::class, "showResetForm"])
			->name('showResetForm');

		$route->post('/password/reset', [AdminResetPasswordController::class, "reset"])
			->name('reset');

	});



	$route->group(["middleware" => "auth:admin"], function($route){

		$route->get('/logout', [AdminLoginController::class, "logout"])
			->name('logout');

		$route->post('/change-password', [AdminLoginController::class, "changePassword"])
			->name('changePassword');

		$route->post('/logout', [AdminLoginController::class, "logout"])
			->name('logout');




		/********************************** Admin Route ********************************/
		$route->get('/dashboard', [AdminController::class, "dashboard"])
			->name('dashboard');

		$route->get('/profile', [AdminController::class, "profile"])
			->name('profile');

		$route->post('/profile', [AdminController::class, "profileUpdate"])
			->name('profileUpdate');

		$route->get('/admin-list', [AdminController::class, "adminList"])
			->name('adminList');

		$route->get('/add-admin', [AdminController::class, "addAdmin"])
			->name('addAdmin');

		$route->post('/add-admin', [AdminController::class, "addAdminProcess"])
			->name('addAdminProcess');

		$route->get('/edit-admin/{admin}', [AdminController::class, "editAdmin"])
			->name('editAdmin');

		$route->post('/edit-admin/{admin}', [AdminController::class, "editAdminProcess"])
			->name('editAdminProcess');

		$route->post('/delete-admin', [AdminController::class, "deleteAdmin"])
			->name('deleteAdmin');

		$route->get('/setting', [AdminController::class, "setting"])
			->name('setting');

		$route->post('/setting', [AdminController::class, "settingProcess"])
			->name('settingProcess');



		/******************************* Route For The Roles And Permission *****************************/

		// $route->get('/roles-list', [RolesAndPermissionsController::class, "rolesList"])
		// 	->name('rolesList');

		// $route->get('/add-roles', [RolesAndPermissionsController::class, "addRoles"])
		// 	->name('addRoles');

		// $route->post('/add-roles', [RolesAndPermissionsController::class, "addRoleProcess"])
		// 	->name('addRoleProcess');

		// $route->get('/edit-role/{id}', [RolesAndPermissionsController::class, "editRole"])
		// 	->name('editRole');

		// $route->post('/edit-role/{id}', [RolesAndPermissionsController::class, "editRoleProcess"])
		// 	->name('editRoleProcess');

		// $route->post('/delete-roles', [RolesAndPermissionsController::class, "deleteRoles"])
		// 	->name('deleteRoles');

		// $route->post('/role/{id}/assign', [RolesAndPermissionsController::class, "assignRolesProcess"])
		// ->name('assignRolesProcess');

		// $route->post('/role/{id}/assign', [RolesAndPermissionsController::class, "assignRolesProcess"])
		// ->name('assignRolesProcess');

		// $route->get('/roles/{id}/assign', [RolesAndPermissionsController::class, "assignRoles"])
		// 	->name('assignRoles');

		// $route->post('/roles/{id}/assign', [RolesAndPermissionsController::class, "assignRolesProcess"])
		// 	->name('assignRolesProcess');

		// $route->get('/permissions/{id}/assign', [RolesAndPermissionsController::class, "assignPermissions"])
		// 	->name('assignPermissions');

		// $route->post('/permissions/{id}/assign', [RolesAndPermissionsController::class, "assignPermissionsProcess"])
		// 	->name('assignPermissionsProcess');

		// $route->get('/permission-list', [RolesAndPermissionsController::class, "permissionList"])
		// 	->name('permissionList');

		// $route->get('/add-permission', [RolesAndPermissionsController::class, "addPermission"])
		// 	->name('addPermission');

		// $route->post('/add-permission', [RolesAndPermissionsController::class, "addPermissionProcess"])
		// 	->name('addPermissionProcess');

		// $route->get('/edit-permission/{id}', [RolesAndPermissionsController::class, "editPermission"])
		// 	->name('editPermission');

		// $route->post('/edit-permission/{id}', [RolesAndPermissionsController::class, "editPermissionProcess"])
		// 	->name('editPermissionProcess');

		// $route->post('/delete-permission', [RolesAndPermissionsController::class, "deletePermission"])
		// 	->name('deletePermission');


		// Routes for TicketCotroller
		$route->get('/ticket', [TicketController::class, 'getAllTicket'])
			->name('ticket.index');

		$route->delete('/ticket/{ticket_id}', [TicketController::class, 'deleteTicket'])
			->name('ticket.delete');

		$route->resource('/banner', BannerController::class);
		$route->resource('/staff', StaffController::class);
		$route->resource('/product', ProductController::class);
		$route->resource('/menu', MenuController::class);
		$route->resource('/cake', CakeController::class);
		$route->resource('/cakebanner', CakeBannerController::class);


		/*************************************** User Route Controller ***********************************/
		$route->get('/user-list', [UserController::class, "userList"])
		->name("userList");

		$route->get('/add-user', [UserController::class, "addUser"])
		->name("addUser");

		$route->post('/add-user', [UserController::class, "addUser"])
		->name("addUser");

		$route->get("/edit-user/{user}", [UserController::class, "editUser"])
		->name("editUser");

		$route->post("/edit-user/{user}", [UserController::class, "editUserProcess"])
		->name("editUserProcess");

		$route->post('/delete-user/{id}', [UserController::class, "deleteUser"])
		->name("deleteUser");

	});


});
