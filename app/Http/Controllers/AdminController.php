<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Employe;
use App\Models\Job;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }
    public function dashboard(){
        $candidates=Candidate::all();
        $employes=Employe::all();
        $jobs=Job::all();
        $application=Job::with('candidates')->get();
        return view('admin.dashboard',[
            'candidates'=>$candidates,
            "employes"=>$employes,
            "jobs"=>$jobs,
            "application"=>$application
        ]);
    }

    public function candidates(){
        $candidates=Candidate::paginate(6);
        return view('admin.candidates',[
            'candidates'=>$candidates
        ]);
    }

    public function employes(){
        $employes=Employe::paginate(6);
        return view('admin.employe',[
            'employes'=>$employes,
        ]);
    }

    public function jobs(){
        $jobs=Job::paginate(6);
        return view('admin.jobs',[
            'jobs'=>$jobs,
        ]);
    }

    public function delete(Request $request,$id){
        $job=Job::find($id);
        $job->delete();
        $request->session()->flash('status',"zadanie zostało usunięte z powodzeniem");
        return redirect()->back();

    }
}
