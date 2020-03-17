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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'FrontController@welcome');
Route::get('/allprojects', 'FrontController@allprojects')->name('all_projects');
Route::get('/single/project/{id}', 'FrontController@singleproject')->name('single_projects');
Route::get('/testimonials', 'FrontController@testimonial')->name('testimonials');
Route::get('/service/{id}', 'FrontController@service')->name('service');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/contact', 'FrontController@contact')->name('contact');


// Auth::routes();
// hide register button
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');





// show login form before redirect to dashboard
Route::group(['middleware' => 'auth'], function(){

     
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

     //client routes
     Route::resource('clients', 'Admin\ClientController')->except(['show']);

     //team routes
     Route::resource('team', 'Admin\TeamController')->except(['show']);
     

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


     Route::group([
          'prefix' => 'project_agents',
     ], function () {
          Route::get('/', 'Admin\ProjectAgentsController@index')
          ->name('project_agents.project_agent.index');
          Route::get('/create','Admin\ProjectAgentsController@create')
               ->name('project_agents.project_agent.create');
               Route::get('/show/{projectAgent}','Admin\ProjectAgentsController@show')
               ->name('project_agents.project_agent.show')->where('id', '[0-9]+');
               Route::get('/{projectAgent}/edit','Admin\ProjectAgentsController@edit')
               ->name('project_agents.project_agent.edit')->where('id', '[0-9]+');
               Route::post('/', 'Admin\ProjectAgentsController@store')
               ->name('project_agents.project_agent.store');
               Route::put('project_agent/{projectAgent}', 'Admin\ProjectAgentsController@update')
               ->name('project_agents.project_agent.update')->where('id', '[0-9]+');
          Route::delete('/project_agent/{projectAgent}','Admin\ProjectAgentsController@destroy')
          ->name('project_agents.project_agent.destroy')->where('id', '[0-9]+');
     });

Route::post('addimage','Admin\ProjectsController@addimage')->name('addimage');
Route::post('deleteimage','Admin\ProjectsController@deleteimage')->name('deleteimage');

     Route::group([
          'prefix' => 'services',
     ], function () {
          Route::get('/', 'Admin\ServicesController@index')
          ->name('services.service.index');
          Route::get('/create','Admin\ServicesController@create')
          ->name('services.service.create');
          Route::get('/show/{service}','Admin\ServicesController@show')
          ->name('services.service.show')->where('id', '[0-9]+');
          Route::get('/{service}/edit','Admin\ServicesController@edit')
          ->name('services.service.edit')->where('id', '[0-9]+');
          Route::post('/', 'Admin\ServicesController@store')
               ->name('services.service.store');
               Route::put('service/{service}', 'Admin\ServicesController@update')
               ->name('services.service.update')->where('id', '[0-9]+');
          Route::delete('/service/{service}','Admin\ServicesController@destroy')
          ->name('services.service.destroy')->where('id', '[0-9]+');
     });

     Route::group([
          'prefix' => 'emails',
     ], function () {
          Route::get('/', 'Admin\EmailsController@index')
          ->name('emails.email.index');
          
          Route::get('/show/{email}','Admin\EmailsController@show')
          ->name('emails.email.show')->where('id', '[0-9]+');
          
          Route::delete('/email/{email}','Admin\EmailsController@destroy')
          ->name('emails.email.destroy')->where('id', '[0-9]+');
     });
});

