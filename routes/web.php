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

/* Front End User side
************
*/

Route::get('/', 'FrontEndHomeController@index')->name('user.index');

/*Getting 
the admin dashbard
*/

Route::get('/admin', 'adminController@index');

/*category form route
*/
Route::get('/admin/category', 'adminController@category')->name('admin.category');

/*Adding products
*/
Route::get('/admin/products', 'adminController@products')->name('admin.products');

/*Add category */

Route::get('/admin/addCategory', 'adminController@addCategory')->name('admin.addCategory');

/*Add product */

Route::get('/admin/addProduct', 'adminController@addProduct')->name('admin.addProduct');

/*Suppliers */

Route::get('/admin/suppliers', 'adminController@suppliers')->name('admin.suppliers');

/*Add supplier */

Route::get('/admin/addSupplier', 'adminController@addSupplier')->name('admin.addSupplier');

/*Reviews */

Route::get('/admin/reviews', 'adminController@reviews')->name('admin.reviews');

/*Banners */

Route::get('/admin/banners', 'adminController@banners')->name('admin.banners');

/*Add New Banner */

Route::get('/admin/addBanner', 'adminController@addBanner')->name('admin.addBanner');

/* Orders */

Route::get('/admin/orders', 'adminController@orders')->name('admin.orders');

/* Returns */

Route::get('/admin/returns', 'adminController@returns')->name('admin.returns');

/* Coupons */

Route::get('/admin/coupons', 'adminController@coupons')->name('admin.coupons');

/* Customers */

Route::get('/admin/customers', 'adminController@customers')->name('admin.customers');

/* Customers */

Route::get('/admin/mail', 'adminController@mail')->name('admin.mail');