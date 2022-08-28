<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clientlogin;
use App\Http\Controllers\clientcompt;
use App\Http\Controllers\clientregister;
use App\Http\Controllers\stripepayement;
use App\Http\Middleware\clientAutentification;
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
Route::middleware([clientAutentification::class])->group(function () {
Route::get('/test', function () {
    return dd(request()->client_email);
   // return view('/test');
});

Route::get('/walo', function () {
    //session(['clientID' => 'ebbana']);
 //  request()->session()->forget('clientID');
//  dd(request()->session()->all());

});
Route::get('/logout', function () {

    session(['clientID' => 'ebbana']);
    return redirect('/logIn');
    //dd(request()->session()->all()['clientID']);

  });
Route::get('/result', function () {
    // dd(request());
    return view('pages.client.client_resultat_products');
 });

 Route::get('/search', function () {
    // dd(request());

    return view('pages.client.client_search_product');
 });
 //->middleware(clientAutentification::class)

 Route::get('/compt',[clientcompt::class, 'GetComptClientPage']);
 Route::post('/compt',[clientcompt::class, 'UpdateComptClient']);
});
Route::get('/logIn',[clientlogin::class, 'getloginpage']);
Route::post('/logIn',[clientlogin::class, 'CheckClientExistant']);

Route::get('/register',[clientregister::class, 'GetRegisterPage']);
Route::post('/register',[clientregister::class, 'RegisterNewClient']);


//variable for testing
Route::get('/', function () {
// dd(DB::select("SELECT ID,Email,Pasword from compt"));

   // dd(Hash::check('secret', Hash::make('secret')));
 dd(request()->session()->all());

});