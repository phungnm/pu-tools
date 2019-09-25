<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('baconheo')->group(function () {
		// Lấy danh sách sản phẩm
		Route::get('access', 'Api\baconheo\AccessController@index')->name('access.index');

		// Lấy thông tin sản phẩm theo id
		Route::get('access/{id}', 'Api\baconheo\AccessController@show')->name('access.show');

		// Thêm sản phẩm mới
		Route::post('access', 'Api\baconheo\AccessController@store')->name('access.store');

		// Cập nhật thông tin sản phẩm theo id
		# Sử dụng put nếu cập nhật toàn bộ các trường
		Route::put('access/{id}', 'Api\baconheo\AccessController@update')->name('access.update');
		# Sử dụng patch nếu cập nhật 1 vài trường
		Route::patch('access/{id}', 'Api\baconheo\AccessController@update')->name('access.update');

		// Xóa sản phẩm theo id
		Route::delete('access/{id}', 'Api\baconheo\AccessController@destroy')->name('access.destroy');
});