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
*/



///////////////      NGƯỜI DÙNG
///
///
///
Route::get('/', 'PostController@index');
Route::get('single', function(){
	return view('single');
});
Route::get('/{slug}', 'PostController@detail');





//////////////        ADMIN
///
///
///



/////////////IMG
Route::get('createimg/{id}','ImgController@create'); //Route hiển thị thêm ảnh theo id
Route::post('upload','ImgController@upload'); //Upload ảnh theo id







Route::prefix('admin')->group(function(){
	Auth::routes();
	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('login', 'Auth\LoginController@login');
	
	Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
	Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
	Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
	Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
	Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
	Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
	Route::post('password/reset', 'Auth\ResetPasswordController@reset');



Route::middleware('auth')->group(function(){
		Route::get('/', function () {
	return view('admin.index');
});



///////////////        POST ADMIN
Route::get('/post','PostController@list');//Route hiển thị danh sách bài viết
Route::get('/listposts','PostController@getPosts')->name('admin.listposts');//khởi tạo route để lấy dữ liệu từ DB
Route::delete('/post/{id}', 'PostController@destroy');//khởi tạo route xóa bài viết dựa theo id
// Route::get('/post/search', 'PostController@searchad')->name('post.search');
Route::get('/post/{id}', 'PostController@detailad');
Route::get('/post/create', 'PostController@create')->name('admin.createPost');//Khởi tạo route hiển thị thêm bài viết
Route::post('/post', 'PostController@store')->name('admin.storePost');//Khởi tạo route thêm mới bài viết
Route::get('/post/edit/{id}', 'PostController@edit');//Khởi tạo route hiển thị sửa bài viết
Route::post('/post/{id}', 'PostController@update');//Khởi tạo route update bài viết


		
	
///////////////           CATEGORY ADMIN
Route::get('/category', 'CategoryController@index')->name('admin.Cate'); //Route hiển thị danh sách các category

Route::delete('/category/{id}', 'CategoryController@destroy');//Route xóa một category dựa vào id




Route::get('/category/create', 'CategoryController@create')->name('admin.createCate'); //Route hiển thị thêm category
Route::post('/category','CategoryController@store')->name('admin.storeCate');//Route thêm mới category vào DB

Route::get('/category/edit/{id}', 'CategoryController@edit'); //Route hiển thị sửa một category theo id
Route::post('/category/{id}', 'CategoryController@update'); //Route update một category theo id
	Route::get('/home', 'HomeController@index')->name('home');
});


});
