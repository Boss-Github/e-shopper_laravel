<?php

use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/',"IndexController@index")->name('index');
    Route::get('/category/{id}',"IndexController@category")->name('category');
    Route::get('/brand/{id}',"IndexController@brand")->name('brand');
    Route::match(['get','post'],'/detail/{id}',"IndexController@detail")->name('detail');

    Route::get('/addtocart/{id}',"IndexController@addtocart")->name('addtocart');

    Route::match(['get','post'], '/cartajax',"IndexController@cartajax")->name('cartajax');
    Route::match(['get','post'], '/viewajax',"IndexController@viewajax")->name('viewajax');



    Route::get( '/plusajax',"IndexController@plusajax")->name('plusajax');
    Route::get( '/minusajax',"IndexController@minusajax")->name('minusajax');
    Route::get( '/removeajax',"IndexController@removeajax")->name('removeajax');
    Route::get( '/catajax',"IndexController@catajax")->name('catajax');


    Route::get('search',[\App\Http\Controllers\IndexController::class,'search']);
    Route::get('/autocomplete',[\App\Http\Controllers\IndexController::class,'autocomplete'])->name('autocomplete');


    Route::match(['get', 'post'], '/cart',"IndexController@cart")->name('cart');
    Route::match(['get', 'post'], '/modal',"IndexController@modal")->name('modal');

    Route::get('plus/{rowId}/{qty}', 'IndexController@plus')->name('plus');
    Route::get('minus/{rowId}/{qty}', 'IndexController@minus')->name('minus');
    Route::get('remove/{rowId}', 'IndexController@remove')->name('remove');


});







Route::group(['prefix' => "admin","middleware"=>"auth","namespace"=>"Admin"], function() {


    Route::get( '/',"IndexController@index")->name('index');
    Route::resource( 'category',"CategoryController");
    Route::resource( 'comment',"CommentController");
    Route::resource( 'post',"PostController");
    Route::resource( 'users',"UsersController");
    Route::resource( 'tags',"TagsController");
    Route::resource( 'subs',"SubsController");
    Route::resource( 'order',"OrdersController");



});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
