<?php

use App\Http\Controllers\CvController;
use App\Http\Controllers\EmployeController;
use App\Models\Candidate;
use App\Models\Comment;
use App\Models\Job;
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
    return view('pages.home',[
        'jobs'=>Job::orderBy('created_at','DESC')->take(4)->get(),
        'candidates'=>Candidate::all(),
        'comments'=>Comment::with('candidate')->get(),
    ]);
})->name('home.pages');


// candidate route
    Route::resource('/candidate', CandidateController::class);
    Route::post('/candidate/search',"CandidateController@getCandidate")->name('candidate.search');
    Route::get('/candidate/{id}/cv/{job?}','CandidateController@getCandidateCv')->name('candidate.profile');
    Route::get('/admin/candidate','CandidateController@dashboard')->name('candidate.dashboard');
    Route::get('applied_jobd','CandidateController@applied_jobs')->name('candidate.applied_jobs');
    Route::get('/cv','CandidateController@getCv')->name('candidate.cv');
    Route::get('/profile',"CandidateController@getProfile")->name('candidate.show.profile');
    Route::get('/favorite',"CandidateController@getFavorite")->name('candidate.favorite');
    Route::delete('/favorite/delete/{id}',"CandidateController@deleteFavorite")->name('candidate.delete.favorite');
    Route::get('/favorite/title',"CandidateController@getFavoriteByTitle")->name('favorite.get');
    Route::delete('/applied/delete/{id}',"CandidateController@deleteAppliedJob")->name('delete.apply');
    Route::get('change_password','CandidateController@changePassword')->name("candidate.change_password");
    Route::get('/candidate/favorite/add/{id}',"CandidateController@addToFavorite")->name('candidate.add.favorite');
    Route::post('/candidate/apply/job',"CandidateController@applyJob")->name('candidate.apply.job');
    Route::delete('/candidate/remove/job/{id}','CandidateController@removeJob')->name('candidate.remove.job');
    Route::post('/candidate/change/password','CandidateController@updatePassword')->name('change.password');
    Route::resource('/jobs', JobController::class);
    Route::get('/job',function(){
        return view('jobs.index');
    });

    Route::post('/search/job',"JobController@search")->name('search.job');

    /**
     *  cv route
     */
    Route::resource('cvs',CvController::class);

    /**
     *  job route
     */
    Route::resource('job',JobController::class);
    /**
     *  comments route
     */
    Route::resource('comment', CommentController::class);

    /**
     *  EMPLOYE route
     */
    Route::resource('/employe',EmployeController::class);
    Route::prefix('employes')->name('employes.')->group(function(){
        Route::get('dashboard','EmployeController@dashboard')->name('dashboard');
        Route::get('profile','EmployeController@getProfile')->name('profile');
        Route::get('new_job','EmployeController@postJob')->name('job');
        Route::get('manage_job','EmployeController@manageJob')->name('manage.job');
        Route::post('find_job',"EmployeController@findJob")->name('find.job');
        Route::get('change_status/{id}','EmployeController@changeStatus')->name('change.satus');
        Route::get('change_password','EmployeController@changePassword')->name('change.password');
        Route::post('save_password','EmployeController@savePassword')->name('save.password');
        Route::get('candidate/{id}','EmployeController@getCandidateJob')->name('candidates');
        Route::post('find','JobController@findJobByValue')->name('find');
        Route::post('find_date','JobController@findJobByDate')->name('find.date');
    });

    Route::prefix('admin')->name('admin.')->group(function(){
        Route::get('dashboard','AdminController@dashboard')->name('dashboard');
        Route::get('candidates_list','AdminController@candidates')->name('candidates_list');
        Route::get('employes','AdminController@employes')->name('employes');
        Route::get('jobs','AdminController@jobs')->name('jobs');
        Route::delete('jobs/{id}',"AdminController@delete")->name('jobs.delete');


    });

    Route::get('/admin',function(){
        return view('admin.jobs');
    });

Auth::routes();

