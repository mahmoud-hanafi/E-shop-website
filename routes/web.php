<?php

Route::get( '/', function () {
	return view( 'master' );
} );

Route::group( [ 'prefix' => '/admin',['middleware'=>'is_admin'] ], function () {

	Route::prefix( 'products' )->group( function () {
		Route::get( '/', 'admin\ProductsController@index' )->name( 'admin.product.index' );
		Route::get( '/create', 'admin\ProductsController@create' )->name( 'admin.product.create' );
		Route::post( '/store', 'admin\ProductsController@store' )->name( 'admin.product.store' );
		Route::get( '/{product}/show', 'admin\ProductsController@show' )->name( 'admin.product.show' );
		Route::get( '/{product}/edit', 'admin\ProductsController@edit' )->name( 'admin.product.edit' );
		Route::put( '/{product}/update', 'admin\ProductsController@update' )->name( 'admin.product.update' );
		Route::delete( '/{product}/destroy', 'admin\ProductsController@destroy' )->name( 'admin.product.destroy') ;
	} );

	Route::prefix( 'categories' )->group( function () {
		Route::get( '/', 'admin\CategoriesController@index' )->name( 'admin.category.index' );
		Route::get( '/create', 'admin\CategoriesController@create' )->name( 'admin.category.create' );
		Route::post( '/store', 'admin\CategoriesController@store' )->name( 'admin.category.store' );
		Route::get( '/{category}/show', 'admin\CategoriesController@show' )->name( 'admin.category.show' );
		Route::get( '/{category}/edit', 'admin\CategoriesController@edit' )->name( 'admin.category.edit' );
		Route::put( '/{category}/update', 'admin\CategoriesController@update' )->name( 'admin.category.update' );
		Route::delete( '/{category}/destroy', 'admin\CategoriesController@destroy' )->name( 'admin.category.destroy') ;
	} );


    Route::prefix( 'suppliers' )->group( function () {
        Route::get( '/', 'admin\SupplierController@index' )->name( 'admin.supplier.index' );
        Route::get( '/create', 'admin\SupplierController@create' )->name( 'admin.supplier.create' );
        Route::post( '/store', 'admin\SupplierController@store' )->name( 'admin.supplier.store' );
        Route::get( '/{supplier}/show', 'admin\SupplierController@show' )->name( 'admin.supplier.show' );
        Route::get( '/{supplier}/edit', 'admin\SupplierController@edit' )->name( 'admin.supplier.edit' );
        Route::put( '/{supplier}/update', 'admin\SupplierController@update' )->name( 'admin.supplier.update' );
        Route::delete( '/{supplier}/destroy', 'admin\SupplierController@destroy' )->name( 'admin.supplier.destroy') ;
    } );

} );
//users
Route::group( [ 'prefix' => '/user',['middleware'=>'is_user'] ], function () {
	//router for users
	Route::group( [ 'prefix' => '/product' ], function () {
		//router for users
		Route::get('/' ,'user\ProductsController@index')->name('product.index');
	} );
	Route::group( [ 'prefix' => '/cart' ], function () {
		//router for users
		Route::any('/store/{product}' ,'user\CartsController@store')->name('cart.store');
	} );



} );
Route::group( [ 'prefix' => '/user'], function () {
    //router for users
    Route::group(['prefix' => '/visitproduct'], function () {
        //router for users
        Route::get('/', 'user\VisiterController@index')->name('visitproduct.index');
    });
});



Auth::routes();
Route::get('/', 'HomeController@index')->name('master');
Route::get('/home', 'HomeController@home')->name('home');
