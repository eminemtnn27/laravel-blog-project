<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| back Routes
|--------------------------------------------------------------------------
*/
Route::get('giris',[App\Http\Controllers\Back\AuthController::class,'login'])->name('login');
Route::get('/grafik',[App\Http\Controllers\Back\AuthController::class,'chart'])->name('chart');
Route::get('/tablolar',[App\Http\Controllers\Back\AuthController::class,'table'])->name('tables');
Route::get('/admin/register', [App\Http\Controllers\Back\AuthController::class, 'registerForm'])->name('back.register');
Route::post('/admin/register', [App\Http\Controllers\Back\AuthController::class, 'registerSave'])->name('back.registersave');
Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function(){
    Route::get('giris',[App\Http\Controllers\Back\AuthController::class,'login'])->name('login');
    Route::post('giris',[App\Http\Controllers\Back\AuthController::class,'loginPost'])->name('login.post');
   

});

Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function(){
    Route::get('panel',[App\Http\Controllers\Back\Dashboard::class,'index'])->name('dashboard');
    //makale route's
    Route::get('makaleler/silinenler',[App\Http\Controllers\Back\ArticleController::class,'trashed'])->name('trashed.article');
    Route::resource('makaleler','Back\ArticleController');
    Route::get('/switch',[App\Http\Controllers\Back\ArticleController::class,'switch'])->name('switch');
    Route::get('/deletearticle/{id}',[App\Http\Controllers\Back\ArticleController::class,'delete'])->name('delete.article');
    Route::get('/harddeletearticle/{id}',[App\Http\Controllers\Back\ArticleController::class,'hardDelete'])->name('hard.delete.article');
    Route::get('/recoverarticle/{id}',[App\Http\Controllers\Back\ArticleController::class,'recover'])->name('recover.article');
    //category route's
    Route::get('/kategoriler',[App\Http\Controllers\Back\CategoryController::class,'index'])->name('category.index');
    Route::post('/kategoriler/create',[App\Http\Controllers\Back\CategoryController::class,'create'])->name('category.create');
    Route::post('/kategoriler/update',[App\Http\Controllers\Back\CategoryController::class,'update'])->name('category.update');
    Route::post('/kategoriler/delete',[App\Http\Controllers\Back\CategoryController::class,'delete'])->name('category.delete');

    Route::get('/kategori/status',[App\Http\Controllers\Back\CategoryController::class,'switch'])->name('category.switch');
    Route::get('/kategori/getData',[App\Http\Controllers\Back\CategoryController::class,'getData'])->name('category.getdata');
    //Page's route's
    Route::get('/sayfalar',[App\Http\Controllers\Back\PageController::class,'index'])->name('page.index');
    Route::get('/sayfalar/olustur',[App\Http\Controllers\Back\PageController::class,'create'])->name('page.create');
    Route::get('/sayfalar/guncelle/{id}',[App\Http\Controllers\Back\PageController::class,'update'])->name('page.edit');
    Route::post('/sayfalar/guncelle/{id}',[App\Http\Controllers\Back\PageController::class,'updatePost'])->name('page.edit.post');
    Route::post('/sayfalar/olustur',[App\Http\Controllers\Back\PageController::class,'post'])->name('page.create.post');
    Route::get('/sayfa/switch',[App\Http\Controllers\Back\PageController::class,'switch'])->name('page.switch');
    Route::get('/sayfa/sil/{id}',[App\Http\Controllers\Back\PageController::class,'delete'])->name('page.delete');
    //
   

    Route::get('cikis',[App\Http\Controllers\Back\AuthController::class,'logout'])->name('logout');
});

// Mailbox Menüsü
Route::group(['prefix' => 'mailbox'], function () {
    Route::match(['GET','POST'],'/','MailBoxController@gelenKutusu')->name('gelenKutusu'); 
});
/*
|--------------------------------------------------------------------------
| front Routes
|--------------------------------------------------------------------------
*/

Route::get('yazarlık',[App\Http\Controllers\Front\Homepage::class, 'yazar'])->name('yazar');



Route::get('/kategori/{category}',[App\Http\Controllers\Front\Homepage::class, 'category'])->name('category');

Route::get('/',[App\Http\Controllers\Front\Homepage::class,'index'])->name('homepage');
Route::get('/sayfa',[App\Http\Controllers\Front\Homepage::class ,'index']);
Route::get('/iletisim' ,[App\Http\Controllers\Front\Homepage::class, 'contact'])->name('contact');
Route::post('/iletisim',[App\Http\Controllers\Front\Homepage::class ,'contactpost'])->name('contact.post');
Route::get('/{category}/{slug}',[App\Http\Controllers\Front\Homepage::class,'single'])->name('single');

//Route::get('/{tag}',[App\Http\Controllers\Front\Homepage::class,'tag'])->name('tag');

Route::get('/{sayfa}', [App\Http\Controllers\Front\Homepage::class,'page'])->name('page');
Route::get('create-newsletter','NewsletterController@create');
Route::post('store-newsletter','NewsletterController@store');
Route::get('/yorum' ,[App\Http\Controllers\Front\Homepage::class, 'comment'])->name('comment');
Route::post('/yorum',[App\Http\Controllers\Front\Homepage::class ,'commentpost'])->name('comment.post');