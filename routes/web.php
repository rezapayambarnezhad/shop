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
//Auth::routes();
//Route::get('/', function () {
//    return view('front.index');
//})->name('main');
Route::get('/', 'MainController@index')->name('main');

Route::prefix('admin')->middleware('checkrole')->group(function (){
    Route::get('/','back\AdminController@index')->name('admin.index');
    Route::get('/users','back\UserController@index')->name('admin.users');
    Route::get('/users/profile/{user}','back\UserController@edit')->name('admin.profile');
    Route::post('/users/profile-update/{user}','back\UserController@update')->name('admin.profile-update');
    Route::get('/users/profile-delete/{user}','back\UserController@destroy')->name('admin.profile-delete');
    Route::get('/users/profile-status/{user}','back\UserController@status')->name('admin.profile-status');

});

Route::prefix('admin/categories')->middleware('checkrole')->group(function (){
    Route::get('/','back\CategoryController@index')->name('admin.categories');
    Route::get('/create','back\CategoryController@create')->name('admin.categories.create');
    Route::post('/store','back\CategoryController@store')->name('admin.categories.store');
    Route::get('/edit/{category}','back\CategoryController@edit')->name('admin.categories.edit');
    Route::post('/update/{category}','back\CategoryController@update')->name('admin.categories.update');
    Route::get('/destroy/{category}','back\CategoryController@destroy')->name('admin.categories.destroy');
});

Route::prefix('admin/articles')->middleware('checkrole')->group(function (){
    Route::get('/','back\ArticleController@index')->name('admin.articles');
    Route::get('/create','back\ArticleController@create')->name('admin.articles.create');
    Route::post('/store','back\ArticleController@store')->name('admin.articles.store');
    Route::get('/edit/{article}','back\ArticleController@edit')->name('admin.articles.edit');
    Route::post('/update/{article}','back\ArticleController@update')->name('admin.articles.update');
    Route::get('/destroy/{article}','back\ArticleController@destroy')->name('admin.articles.destroy');
    Route::get('/status/{article}','back\ArticleController@status')->name('admin.article-status');
    Route::get('/test/{article}','back\ArticleController@test')->name('admin.article-test');
//    Route::post('/search','back\ArticleController@search')->name('admin.search');
});

Route::prefix('admin/comments')->middleware('checkrole')->group(function (){
    Route::get('/','back\CommentController@index')->name('admin.comments');
    Route::get('/edit/{comment}','back\CommentController@edit')->name('admin.comments.edit');
    Route::post('/update/{comment}','back\CommentController@update')->name('admin.comments.update');
    Route::get('/destroy/{comment}','back\CommentController@destroy')->name('admin.comments.destroy');
    Route::get('/status/{comment}','back\CommentController@status')->name('admin.comments-status');
});

Route::prefix('admin/sliders')->middleware('checkrole')->group(function (){
    Route::get('/','back\SliderController@index')->name('admin.sliders');
    Route::post('/store','back\SliderController@store')->name('admin.sliders.store');
    Route::get('/destroy/{slider}','back\SliderController@destroy')->name('admin.sliders.destroy');
    Route::get('/status/{slider}','back\SliderController@status')->name('admin.sliders-status');
});

Route::prefix('admin/footers')->middleware('checkrole')->group(function (){
    Route::get('/','back\FooterController@index')->name('admin.footers');
    Route::post('/store','back\FooterController@store')->name('admin.footers.store');
    Route::post('/update/{footer}','back\FooterController@update')->name('admin.footers.update');
    Route::get('/destroy/{footer}','back\FooterController@destroy')->name('admin.footers.destroy');
    Route::get('/status/{footer}','back\FooterController@status')->name('admin.footers-status');
});

Route::prefix('admin/contacts')->middleware('checkrole')->group(function (){
    Route::get('/','back\ContactController@index')->name('admin.contacts');
    Route::post('/store','back\ContactController@store')->name('admin.contacts.store');
    Route::get('/destroy/{contact}','back\ContactController@destroy')->name('admin.contacts.destroy');
    Route::get('/status/{contact}','back\ContactController@status')->name('admin.contacts-status');
//    Route::get('/edit/{contact}','back\ContactController@edit')->name('admin.contacts.edit');
});

//-------------------------------------------------------------------------------------------
Route::prefix('admin/tests')->middleware('checkrole')->group(function (){
    Route::get('/','TestController@index')->name('admin.tests');
//    Route::post('/store','back\ContactController@store')->name('admin.contacts.store');
//    Route::get('/destroy/{contact}','back\ContactController@destroy')->name('admin.contacts.destroy');
    Route::get('/status/{test}','TestController@status')->name('admin.tests-status');
//    Route::get('/edit/{contact}','back\ContactController@edit')->name('admin.contacts.edit');
});
//--------------------------------------------------------------------------------------------



Auth::routes();

Route::get('/home', 'HomeController@index')->name('front.index');

Route::get('/profile/{user}','front\UserController@edit')->name('profile');
Route::post('/profile/{user}','front\UserController@update')->name('profile-update');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();

});


Route::get('articles','front\ArticleController@index')->name('articles');
Route::get('articles/{article}','front\ArticleController@show')->name('article');


Route::get('categories','front\CategoryController@index')->name('categories');
Route::get('categories/{category}','front\CategoryController@show')->name('category');

Route::post('/comment/{article}','front\CommentController@store')->name('comment.store');


Route::get('about','front\AboutController@index')->name('about');

Route::get('contact','front\ContactController@index')->name('contact');
Route::post('contact','front\ContactController@store')->name('contact.store');

Route::post('search','front\SearchController@index')->name('search');

Route::post('email','front\FooterController@index')->name('email-list');
