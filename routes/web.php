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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('dangxuat',[
// 	'as'=>'logout',
// 	'uses' =>'PageController@getLogout'
// ]);

Route::group(['prefix'=>'admin'],function(){

	// theloai----------------------
	Route::group(['prefix'=>'theloai'],function(){
		// admin/theloai/....
		Route::get('danhsach',[
			'as'=> 'danhsach',
			'uses'=> 'TheLoaiController@getDanhSach'
		]);

		Route::get('sua',[
			'as'=> 'sua',
			'use'=> 'TheLoaiController@getSua'
		]);

		Route::get('them',[
			'as'=> 'them',
			'use'=> 'TheLoaiController@getThem'
		]);
	});

	// loaitin------------------------------
	Route::group(['prefix'=>'loaitin'],function(){
		// admin/theloai/....
		Route::get('danhsach',[
			'as'=> 'danhsach',
			'use'=> 'TheLoaiController@getDanhSach'
		]);

		Route::get('sua',[
			'as'=> 'sua',
			'use'=> 'TheLoaiController@getSua'
		]);

		Route::get('them',[
			'as'=> 'them',
			'use'=> 'TheLoaiController@getThem'
		]);
	});

	// slide--------------------------------
	Route::group(['prefix'=>'slide'],function(){
		// admin/theloai/....
		Route::get('danhsach',[
			'as'=> 'danhsach',
			'use'=> 'TheLoaiController@getDanhSach'
		]);

		Route::get('sua',[
			'as'=> 'sua',
			'use'=> 'TheLoaiController@getSua'
		]);

		Route::get('them',[
			'as'=> 'them',
			'use'=> 'TheLoaiController@getThem'
		]);
	});

	// tintuc--------------------------------
	Route::group(['prefix'=>'tintuc'],function(){
		// admin/theloai/....
		Route::get('danhsach',[
			'as'=> 'danhsach',
			'use'=> 'TheLoaiController@getDanhSach'
		]);

		Route::get('sua',[
			'as'=> 'sua',
			'use'=> 'TheLoaiController@getSua'
		]);

		Route::get('them',[
			'as'=> 'them',
			'use'=> 'TheLoaiController@getThem'
		]);
	});

	// user------------------------------------
	Route::group(['prefix'=>'user'],function(){
		// admin/theloai/....
		Route::get('danhsach',[
			'as'=> 'danhsach',
			'use'=> 'TheLoaiController@getDanhSach'
		]);

		Route::get('sua',[
			'as'=> 'sua',
			'use'=> 'TheLoaiController@getSua'
		]);

		Route::get('them',[
			'as'=> 'them',
			'use'=> 'TheLoaiController@getThem'
		]);
	});
});

