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

// Route::get('/', function () {
//     return view('welcome');
// });

//HomePage
Route::get('/', 'HomeController@indexPage');

//UserPage
Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'auth'], function () {
        Route::get('/sign-up', 'UserAuthController@signUpPage');
        Route::post('/sign-up', 'UserAuthController@signUpProcess');

        Route::get('/sign-in', 'UserAuthController@signInPage');
        Route::post('/sign-in', 'UserAuthController@signInProcess');

        Route::get('/sign-out', 'UserAuthController@signOut');
    });
});
/*
Route::get('user/auth/sign-up', 'UserAuthController@signUpPage');
Route::post('user/auth/sign-up', 'UserAuthController@signUpProcess');

Route::get('user/auth/sign-in', 'UserAuthController@signInPage');
Route::post('user/auth/sign-in', 'UserAuthController@signInProcess');

Route::get('user/auth/sign-out', 'UserAuthController@signOut');
*/

//Merchandise
Route::group(['prefix' => 'merchandise'], function () {
    Route::get('/', 'MerchandiseController@merchandiseListPage');
    Route::get('/create', 'MerchandiseController@merchandiseCreateProcess');

    Route::get('/manage', 'MerchandiseController@merchandiseManageListPage');

    Route::group(['prefix' => '{merchandise_id}'], function () {
        Route::get('/', 'MerchandiseController@merchandiseItemPage');

        Route::get('/edit', 'MerchandiseController@merchandiseItemEditPage');

        Route::put('/', 'MerchandiseController@merchandiseItemUpdateProcess');

        Route::post('/buy', 'MerchandiseController@merchandiseItemBuyProcess');
    });
});
/*
Route::get('/merchandise', 'MerchandiseController@merchandiseListPage');
Route::get('/merchandise/create', 'MerchandiseController@merchandiseCreateProcess');

Route::get('/merchandise/manage', 'MerchandiseController@merchandiseManageListPage');

Route::get('/merchandise/{merchandise_id}', 'MerchandiseController@merchandiseItemPage');

Route::get('/merchandise/{merchandise_id}/edit', 'MerchandiseController@merchandiseItemEditPage');

Route::put('/merchandise/{merchandise_id}/', 'MerchandiseController@merchandiseItemUpdateProcess');

Route::post('/merchandise/{merchandise_id}/buy', 'MerchandiseController@merchandiseItemBuyProcess');
*/

//Transaction
Route::get('/transaction', 'TransactionController@transactionListPage');
