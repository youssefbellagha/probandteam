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



Route::group([
    'prefix' => 'projects',
], function () {
    Route::get('/', 'Admin\ProjectsController@index')
         ->name('projects.project.index');
    Route::get('/create','Admin\ProjectsController@create')
         ->name('projects.project.create');
    Route::get('/show/{project}','Admin\ProjectsController@show')
         ->name('projects.project.show')->where('id', '[0-9]+');
    Route::get('/{project}/edit','Admin\ProjectsController@edit')
         ->name('projects.project.edit')->where('id', '[0-9]+');
    Route::post('/', 'Admin\ProjectsController@store')
         ->name('projects.project.store');
    Route::put('project/{project}', 'Admin\ProjectsController@update')
         ->name('projects.project.update')->where('id', '[0-9]+');
    Route::delete('/project/{project}','Admin\ProjectsController@destroy')
         ->name('projects.project.destroy')->where('id', '[0-9]+');
});