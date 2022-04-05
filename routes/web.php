<?php

use App\Http\Controllers\CvController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',function(){
    return view('pages.home');
})->name('home');

// candidate route
    Route::resource('/candidate', CandidateController::class);
    Route::post('/candidate/search',"CandidateController@getCandidate")->name('candidate.search');
    Route::get('/candidate/cv/{id}','CandidateController@getCandidateCv')->name('candidate.profile');
    Route::get('/admin/candidate','CandidateController@dashboard')->name('candidate.dashboard');
    Route::get('applied_jobd','CandidateController@applied_jobs')->name('candidate.applied_jobs');
    Route::get('/cv','CandidateController@getCv')->name('candidate.cv');
    Route::get('/profile',"CandidateController@getProfile")->name('candidate.show.profile');
    Route::get('/favorite',"CandidateController@getFavorite")->name('candidate.favorite');
    Route::delete('/favorite/delete/{id}',"CandidateController@deleteFavorite")->name('candidate.delete.favorite');
    Route::get('/favorite/title',"CandidateController@getFavoriteByTitle")->name('favorite.get');
    Route::delete('/applied/delete/{id}',"CandidateController@deleteAppliedJob")->name('delete.apply');
    Route::get('/candidate/change_password','CandidateController@changePassword')->name("candidate.change_password");
    Route::get('/candidate/favorite/add/{id}',"CandidateController@addToFavorite")->name('candidate.add.favorite');
    Route::resource('/jobs', JobController::class);
    Route::get('/job',function(){
        return view('jobs.index');
    });

    /**
     *  cv route
     */
    Route::resource('cvs',CvController::class);

    /**
     *  job route
     */

     Route::resource('job',JobController::class);

 Route::get('/employe/dashboard',function(){
     return view('employer.admin.dashboard');
 })->name('employe.dashboard');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
