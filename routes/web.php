<?php

use App\Detgambar;

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

Route::get('/', 'PageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login/custom', ['as' => 'login', 'uses'=>'LoginController@login', 
    'as' => 'login.custom'
]); 

Route::group(['middleware' => 'auth'], function(){
    Route::get('/home', function(){
        $data = Detgambar::all();
        return view('home' , compact('data'));
    })->name('home');
    Route::get('/dashboard', function(){
        $member = DB::table('users')->where('admin','=',0)->where('status','=','aktif')->get()->count();
        $ban = DB::table('users')->where('status','=','banned')->get()->count();
        $paket = DB::table('promos')->get()->count();
        $trans = DB::table('transaksis')->get()->count();
        return view('dashboard',compact('member','ban','paket','trans'));
    })->name('dashboard');
});


Route::get('about', function () {
    return view('about');
});
Route::get('user.galeri', function () {
    return view('user.galeri');
});
Route::get('user.myaccount', function () {
    return view('user.myaccount');
});



Route::resource('admin','AdminController');
Route::resource('user','UserController');
Route::get('/show','AdminController@show');

Route::resource('/Promo','PromoController');
Route::resource('/Detgambar','DetgambarController');

Route::resource('birthday','BirthdayController');
Route::resource('wedding','WeddingController');
Route::resource('graduation','GraduationController');


Route::get('transaksi/{id}','TransaksiController@show');
Route::post('order/{id}','TransaksiController@store');

Route::get('myaccount/{id}','UserController@tampil');
Route::get('user/OrderList/{id}','TransaksiController@tampil');
Route::get('tampil','DetgambarController@tampil');
Route::get('listtransaksi','AdminController@showtrans');

Route::post('canceltrans/{id}', 'TransaksiController@cancel');
Route::put('updatetrans/{id}', 'TransaksiController@update');
Route::post('accepttrans/{id}', 'TransaksiController@accept');
Route::post('declinetrans/{id}', 'TransaksiController@decline');

Route::get('gambarbukti/{id}','DetgambarController@bukti');
Route::get('/search','UserController@search');


