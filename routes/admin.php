<?php

use App\Http\Controllers\User\Auth\{UserLoginController};
use App\Http\Controllers\Admin\Auth\{AdminLoginController, AdminForgotPasswordController, AdminResetPasswordController,
			RolesAndPermissionsController};
use App\Http\Controllers\Admin\{AdminController, CategoryController, ProductController, NewsController, PageController, 
			TicketController, UserController};
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

		$route->post('/logout', [AdminLoginController::class, "logout"])
			->name('logout');

		$route->post('/change-password', [AdminLoginController::class, "changePassword"])
			->name('changePassword');


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


		/*************************************** Category Route Controller ***********************************/
		$route->get('/category-list', [CategoryController::class, "categoryList"])
		->name('categoryList');

		$route->get('/add-category', [CategoryController::class, "addCategory"])
		->name('addCategory');

		$route->post('/add-category', [CategoryController::class, "addCategoryProcess"])
		->name('addCategoryProcess');

		$route->get('/edit-category/{category}', [CategoryController::class, "editCategory"])
		->name('editCategory');

		$route->post('/edit-category/{category}', [CategoryController::class, "editCategoryProcess"])
		->name('editCategoryProcess');

		$route->post('/delete-category', [CategoryController::class, "deleteCategory"])
		->name('deleteCategory');



		/********************************** Product Route Controller ********************************/

		$route->get('/product-list', [ProductController::class, "productList"])
		->name('productList');

		$route->get('/add-product', [ProductController::class, "addProduct"])
		->name('addProduct');

		$route->post('/add-product', [ProductController::class, "addProductProcess"])
		->name('addProductProcess');

		$route->get('/edit-product/{product}', [ProductController::class, "editProduct"])
		->name('editProduct');

		$route->get("/update-product-gallery/{product}", [ProductController::class, "updateProductGallery"])
		->name("updateProductGallery");

		$route->post("/update-product-gallery/{product}", [ProductController::class, "updateProductGalleryProcess"])
		->name("updateProductGalleryProcess");

		$route->post('/edit-product/{product}', [ProductController::class, "editProductProcess"])
		->name('editProductProcess');

		$route->post('/delete-product', [ProductController::class, "deleteProduct"])
		->name('deleteProduct');

		$route->post('/delete-product-gallery', [ProductController::class, "deleteProductGallery"])
		->name("deleteProductGallery");



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

		$route->post('/add-user', [UserController::class, "addUserProcess"])
		->name("addUserProcess");

		$route->get("/edit-user/{user}", [UserController::class, "editUser"])
		->name("editUser");

		$route->post("/edit-user/{user}", [UserController::class, "editUserProcess"])
		->name("editUserProcess");

		$route->post('/delete-user', [UserController::class, "deleteUser"])
		->name("deleteUser");



		/*************************************** Page Route Controller ***********************************/
		$route->get('/page-list', [PageController::class, "pageList"])
		->name("pageList");

		$route->get('/add-page', [PageController::class, "addPage"])
		->name("addPage");

		$route->post('/add-page', [PageController::class, "addPageProcess"])
		->name("addPageProcess");

		$route->get("/edit-page/{page}", [PageController::class, "editPage"])
		->name("editPage");

		$route->post("/edit-page/{page}", [PageController::class, "editPageProcess"])
		->name("editPageProcess");

		$route->post('/delete-page', [PageController::class, "deletePage"])
		->name("deletePage");



		/*************************************** News Route Controller ***********************************/
		$route->get('/news-list', [NewsController::class, "newsList"])
		->name("newsList");

		$route->get('/add-news', [NewsController::class, "addNews"])
		->name("addNews");

		$route->post('/add-news', [NewsController::class, "addNewsProcess"])
		->name("addNewsProcess");

		$route->get("/edit-news/{news}", [NewsController::class, "editNews"])
		->name("editNews");

		$route->post("/edit-news/{news}", [NewsController::class, "editNewsProcess"])
		->name("editNewsProcess");

		$route->post('/delete-news', [NewsController::class, "deleteNews"])
		->name("deleteNews");


	});


});
