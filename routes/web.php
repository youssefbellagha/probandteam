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
use Illuminate\Support\Facades\Input;
use App\Models\Countrie; 
use App\Models\Citie;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('countries','Admin\countriesController');
Route::post('citie','Admin\countriesController@storecitie');
Route::post('destroycitie/{id}','Admin\countriesController@destroycitie');
Route::get('dropdown', function(){
 $id = Input::get('option');
$countrie = Countrie::find($id);
    $ctiy = Countries::where('cca3', $countrie->code)->first()->hydrateStates()->states->pluck('name', 'postal');
   // dd($ctiy);
    return $ctiy;
});


//agent routes
Route::resource('agents', 'Admin\AgentController')->except(['show']);