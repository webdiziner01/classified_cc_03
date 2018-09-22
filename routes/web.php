<?php



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


Route::get('user/area/{area}', 'User\AreaController@store')->name('user.area.store');


Route::get('categories', 'Category\CategoryController@index');


Route::group(['prefix' => '/{area}'],function (){


    /*
    * Categories
    * */

    Route::group(['prefix' => 'categories'],function (){
        Route::get('/','Category\CategoryController@index')->name('category.index');
   });
});







