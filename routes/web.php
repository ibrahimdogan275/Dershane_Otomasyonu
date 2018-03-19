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
    return view('Anasayfa');
});

//Genel bilgi
Route::resource("genelbilgi","GenelBilgiController");


//DERS işlemleri
Route::resource("ders","DersController");


//Deneme İşlemleri
Route::resource("denemegir","DenemeController");

//ogretmen işlemleri
Route::resource("logincontrol","LoginController");
Route::get("ogrencidenemeyedekcreat/{id}","DenemeOgrenciController@yedekcreat");
Route::resource("ogrencideneme","DenemeOgrenciController");

Route::post("loginogretmencontrol","LoginController@ogretmen");

Route::get("Ogretmengenelbilgi/{id}","OgretmenController@bilgi");

Route::get("denemenotlarılistele/{id}","OgretmenController@deneme");

Route::get("ogretmendersprogrami","OgretmenController@dersprogrami");

Route::get("ogrencilerim/{id}","OgretmenController@ogrencilerim");

//ogrenci işlemleri
Route::post("loginogrencicontrol","LoginController@ogrenci");
Route::resource("ogrenci","YoneticiOgrenciController");

Route::get("ogrencigenelbilgi/{id}","OgrenciController@bilgi");

Route::get("denemenotlari/{id}","OgrenciController@deneme");

Route::get("dersprogrami","OgrenciController@dersprogrami");

Route::get('ogrencigiris', function () {
    return view('Login.OgrenciGiris');
});


//yonetici işlemleri
Route::get("dersprogramiekle","YoneticiController@dersprogramiekle");

Route::resource("yonetici","YoneticiController");
Route::get("dersprogramiolustur","YoneticiController@dersprogramiolustur");
Route::resource("ogretmenekle","YoneticiogretmenController");
Route::get('yoneticigiris', function () {
    return view('Login.YoneticiGiris');
});

Route::get('panel', function () {
    return view('Yonetici.YoneticiPanel');
});




Route::get('ogretmengiris', function () {
    return view('Login.ogretmenGiris');
});

Route::get('yoneticicikis', function () {
    return view('Login.YoneticiGiris');
});

Route::get('yoneticigeri', function () {
    return view('Anasayfa');
});
Route::get('ogretmencikis', function () {
    return view('Login.OgretmenGiris');
});
Route::get('ogrencicikis', function () {
    return view('Login.OgrenciGiris');
});
Route::resource("login","LoginController");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
