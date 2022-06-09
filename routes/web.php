<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Waver;
use App\Http\Controllers\CustomAuth;
use App\Http\Controllers\sheetCheet;
use App\Http\Controllers\waverStart;

Route::get('home', function(){
    return 1;
});

Route::get('/waver', function(){
    return view('waver_homepage.waverhomepage');
    // return 'hi';
});
Route::get('/b', function(){
    return 'hi';
});
Route::get('/login',[waverStart::class, 'login']);
Route::get('waver/sighin',[waverStart::class, 'sighin']);
Route::get('waver.ng/sighin',[waverStart::class ,'sigin'])->name('sighin');
Route::get('waver.ng/login',[waverStart::class ,'loginPage'])->name('loginPage');

Route::get('waver.ng/sighin',[waverStart::class ,'sighin'])->name('sighin');















// Route::get('/tester', function(){
//     return view('cards');
// });

// Route::get('/home', function(){
//     return view('waver_homepage.waverhomepage');
// });


// Route::get('/carry', function(){
//     return view('carry');
// });



// Route::get('create' , [Waver::class , 'create']);
// Route::get('runner' , [Waver::class , 'c']);
// Route::post('storeblog' , [Waver::class , 'storeblog'])->name('storeblog');




// Route::get('login', [CustomAuth::class ,'login']);
// Route::post('registeruser', [CustomAuth::class, 'registeruser'])->name('registeruser');
// Route::get('register', [CustomAuth::class ,'register']);
// Route::post('loginuser',[CustomAuth::class,'loginuser'])->name('loginuser');
// Route::get('dashboard', [CustomAuth::class ,'dashboard']);


// Revison on Laravel


// Route::get('sheet1',[sheetCheet::class , 'insert_content']);

Route::get('blog', [sheetCheet::class,'index' ]);

Route::post('blog_com',[sheetCheet::class , 'blog_com'])->name('blog_com');

Route::get('data',[sheetCheet::class , 'showData']);
   
Route::get('test',[sheetCheet::class,'perfrom']);

Route::get('findauthor?{id}',[sheetCheet::class,'findauthor']);

