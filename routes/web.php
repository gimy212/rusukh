<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization as LaravelLocalization;
use App\Http\Controllers\TagController;
/*
|--------------------------------------------------------------------------
| Web Routes  Project Version 1 : Validate
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [  'localizationRedirect', 'localeViewPath']
    ], function(){

        Route::get('/', 'ContentController@index');
        Route::get(LaravelLocalization::transRoute('routes.single-show'),'SinglePostController@show');
        Route::get('blog', 'BlogController@index')->name('blog.posts');
        Route::get(LaravelLocalization::transRoute('routes.post-cat'),'BlogController@category');
        Route::get(LaravelLocalization::transRoute('routes.tags-show'),'TagController@show');
        Route::get(LaravelLocalization::transRoute('routes.cat-show'),'CategoryController@show');
        Route::get('/grate', [App\Http\Controllers\QuestionController::class,'index']);
        Route::get('/cars', [App\Http\Controllers\QuestionController::class,'cars']);
        Route::get('/sizing', [App\Http\Controllers\QuestionController::class,'sizing']);
        Route::get('/cat/show/{id}', 'CategoryController@show')->name('cat.show');
       Route::get('/tags/show/{id}', 'TagController@show')->name('tags.show');
        Route::get('/post_show/{id}', [App\Http\Controllers\PostController::class,'show']);
        Route::get('/contactus', 'ContactController@index')->name('contact.index');
        Route::post('/contactus/send', 'ContactController@SendEmail')->name('contact.send');
        Route::get('/booking', 'AppointmentController@index')->name('appointment.index');
        Route::get('/post/{slug}', 'SinglePostController@show')->name('single.show');
         Route::get('/singl/showw', 'SinglePostController@showw')->name('singl.showw');
        Route::get('/ar/post/{slug_ar}', 'SinglePostController@showAr')->name('single-ar.show');
        Route::post('/appointment/send', 'AppointmentController@SendAppointment')->name('appointment.send');
        Route::get('/request-quota', 'MessageController@GetRequestQuota')->name('quota.getquota');
        Route::get('/request-quota/{id}', 'MessageController@ShowRequestQuota')->name('quota.show');
        Route::post('/request-quota/send', 'QuotaController@SendRequestQuota')->name('quota.send');
    });

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/store', [App\Http\Controllers\HomeController::class,'store']);
Route::get('dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/messages', 'MessageController@GetMesaage')->name('message.getmessage')->middleware('auth');
Route::get('/messages/{id}', 'MessageController@show')->name('message.show')->middleware('auth');
Route::get('/appointment', 'MessageController@GetAppointment')->name('appointment.getappointment')->middleware('auth');
Route::get('/appointment/{id}', 'MessageController@showAppointment')->name('appointment.show')->middleware('auth');


Route::get('cat', 'CategoryController@index')->name('cat.index')->middleware('auth');
Route::get('/cat/create', 'CategoryController@create')->name('cat.create')->middleware('auth');
Route::get('/cat/edit/{id}', 'CategoryController@edit')->name('cat.edit')->middleware('auth');
Route::post('/cat/update/{id}', 'CategoryController@update')->name('cat.update')->middleware('auth');
Route::post('/cat/store', 'CategoryController@store')->name('cat.store')->middleware('auth');
Route::delete('/cat/destroy/{id}', 'CategoryController@destroy')->name('cat.destroy')->middleware('auth');


Route::get('tags', 'TagController@index')->name('tags.index')->middleware('auth');
Route::get('/tags/create', 'TagController@create')->name('tags.create')->middleware('auth');
Route::get('/tags/edit/{id}', 'TagController@edit')->name('tags.edit')->middleware('auth');
Route::post('/tags/update/{id}', 'TagController@update')->name('tags.update')->middleware('auth');
Route::post('/tags/store', 'TagController@store')->name('tags.store')->middleware('auth');
Route::delete('/tags/destroy/{id}', 'TagController@destroy')->name('tags.destroy')->middleware('auth');

Route::group(['Middleware'=>'auth', 'prefix'=>'menu'], function(){
        Route::get('all-menus', 'MenuController@index')->name('menu.index');
        Route::get('create', 'MenuController@create')->name('menu.create');
        Route::get('edit/{id}', 'MenuController@edit')->name('menu.edit');
        Route::post('update/{id}', 'MenuController@update')->name('menu.update');
        Route::post('store', 'MenuController@store')->name('menu.store');
        Route::delete('destroy/{id}', 'MenuController@destroy')->name('menu.destroy');

        Route::get('all-chileds', 'MenuController@chiledIndex')->name('chiled.index');
        Route::get('chiled/create', 'MenuController@chiledCreate')->name('chiled.create');
        Route::get('chiled/edit/{id}', 'MenuController@chiledEdit')->name('chiled.edit');
        Route::post('chiled/update/{id}', 'MenuController@chiledUpdate')->name('chiled.update');
        Route::post('chiled/store', 'MenuController@chiledStore')->name('chiled.store');
        Route::delete('chiled/destroy/{id}', 'MenuController@chiledDestroy')->name('chiled.destroy');
});

Route::get('products', 'ProductController@index')->name('products.index')->middleware('auth');
Route::get('/products/create', 'ProductController@create')->name('products.create')->middleware('auth');
Route::get('/products/edit/{id}', 'ProductController@edit')->name('products.edit')->middleware('auth');
Route::post('/products/update/{id}', 'ProductController@update')->name('products.update')->middleware('auth');
Route::post('/products/store', 'ProductController@store')->name('products.store')->middleware('auth');
Route::delete('/products/destroy/{id}', 'ProductController@destroy')->name('products.destroy')->middleware('auth');

Route::get('reviews', 'ReviewController@index')->name('reviews.index')->middleware('auth');
Route::get('/reviews/create', 'ReviewController@create')->name('reviews.create')->middleware('auth');
Route::get('/reviews/edit/{id}', 'ReviewController@edit')->name('reviews.edit')->middleware('auth');
Route::post('/reviews/update/{id}', 'ReviewController@update')->name('reviews.update')->middleware('auth');
Route::post('/reviews/store', 'ReviewController@store')->name('reviews.store')->middleware('auth');
Route::delete('/reviews/destroy/{id}', 'ReviewController@destroy')->name('reviews.destroy')->middleware('auth');


Route::get('slider', 'SliderController@index')->name('slider.index')->middleware('auth');
Route::get('/slider/create', 'SliderController@create')->name('slider.create')->middleware('auth');
Route::get('/slider/edit/{id}', 'SliderController@edit')->name('slider.edit')->middleware('auth');
Route::post('/slider/store', 'SliderController@store')->name('slider.store')->middleware('auth');
Route::post('/slider/update/{id}', 'SliderController@update')->name('slider.update')->middleware('auth');
Route::delete('/slider/destroy/{id}', 'SliderController@destroy')->name('slider.destroy')->middleware('auth');

Route::get('main-content', 'MainContentController@index')->middleware('auth');
Route::get('main-content-ar', 'MainContentController@editAr')->name('main-content-ar')->middleware('auth');
Route::post('main-content-ar/edit', 'MainContentController@updateAr')->name('main-content-ar.update')->middleware('auth');

Route::post('main-content/edit', 'MainContentController@update')->name('main-content.update')->middleware('auth');

Route::get('posts', 'PostController@index')->name('post.index')->middleware('auth');
Route::get('/posts/create', 'PostController@create')->name('post.create')->middleware('auth');
Route::get('/posts/edit/{id}', 'PostController@edit')->name('post.edit')->middleware('auth');
Route::post('/posts/update/{id}', 'PostController@update')->name('post.update')->middleware('auth');
Route::post('/posts/store', 'PostController@store')->name('post.store')->middleware('auth');
Route::delete('/posts/destroy/{id}', 'PostController@destroy')->name('post.destroy')->middleware('auth');



Route::post('/content_update/{id}', [App\Http\Controllers\MainContentController::class,'update']);
Route::post('/main-content-ar_update/{id}', [App\Http\Controllers\MainContentArController::class,'update']);
Route::get('/tags_create', [App\Http\Controllers\TagController::class,'create']);
Route::get('/reviews_index', [App\Http\Controllers\ReviewController::class,'index']); 
Route::get('/chiled_edit/{id}', [App\Http\Controllers\MenuController::class,'chieldedit']);
Route::post('/menu_update/{id}', [App\Http\Controllers\MenuController::class,'chieldupdate']);
Route::get('/message_delete/{id}', [App\Http\Controllers\MessageController::class,'message_delete']);
Route::get('/appoint_delete/{id}', [App\Http\Controllers\MessageController::class,'appoint_delete']);
Route::get('/requst_delete/{id}', [App\Http\Controllers\MessageController::class,'requst_delete']);


Route::post('/quota_send', [App\Http\Controllers\QuotaController::class,'SendRequestQuota']);
Route::post('/qustionn', [App\Http\Controllers\QuestionController::class,'store']);
Route::get('/question_index', [App\Http\Controllers\QuestionController::class,'question_index']);
Route::get('/question_show/{id}', [App\Http\Controllers\QuestionController::class,'question_show']);
Route::get('/question_delete/{id}', [App\Http\Controllers\QuestionController::class,'question_delete']);
Route::post('/cars_create', [App\Http\Controllers\QuestionController::class,'cars_create']);
Route::get('/reviews_car', [App\Http\Controllers\QuestionController::class,'reviews_car']);
Route::get('/cars_show/{id}', [App\Http\Controllers\QuestionController::class,'cars_show']);
Route::get('/questioncar_delete/{id}', [App\Http\Controllers\QuestionController::class,'questioncar_delete']);
Route::post('/sizing_create', [App\Http\Controllers\QuestionController::class,'sizing_create']);
Route::get('/sizing_index', [App\Http\Controllers\QuestionController::class,'sizing_index']);
Route::get('/sizing_delete/{id}', [App\Http\Controllers\QuestionController::class,'sizing_delete']);
