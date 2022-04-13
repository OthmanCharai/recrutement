<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Country;
use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $total=count(Job::all());
        $jobs=Job::paginate(6);
        return view('jobs.index',[
            'jobs'=>$jobs,
            'totale'=>$total
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJobRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJobRequest $request)
    {
        if($request->hasFile('image')){
            $image=$request->file('image');
            $image=Storage::disk('public')->putFile('jobs',$image);
            $url=Storage::url($image);
        }
        $employe=Auth::user()->employe;
        $data=[
            'title'=>$request->title,
            'description'=>$request->description,
            'type'=>$request->type,
            'salary'=>$request->salary,
            'experience'=>$request->experience,
            'gender'=>$request->gender,
            'country'=>$request->country,
            'city'=>$request->city,
            'address'=>$request->address,
            'deadline_date'=>$request->deadline_date,
            'licence_driver'=>$request->driver_licence,
            'image'=>$url,
            'status'=>"active",
            'employe_id'=>$employe->id
        ];
        Job::create($data);
        $request->session()->flash('status','dane zostały zapisane z powodzeniem');
        return redirect()->route('employes.job');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show($job)
    {
        //
        $cvs=[];
        if(Auth::user()){
            $candidate=Auth::user()->candidate;
            if($candidate){
                $cvs=$candidate->cvs;
            }
        }
        $job=Job::find($job);
        $day=$job->created_at->diffForHumans();
        $jobs=Job::all()->take(6);
        return view('jobs.show',[
            'job'=>$job,
            'jobs'=>$jobs,
            'day'=>$day,
            'cvs'=>$cvs
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit( $job)
    {
        //
        $employe=Auth::user()->employe;
        $job=Job::find($job);
        $countries=Country::all();
        return view('employer.admin.update-job',[
            'job'=>$job,
            'employe'=>$employe,
            'countries'=>$countries
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJobRequest  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(StoreJobRequest $request, $job)
    {
        //
        $job=Job::find($job);
        if($request->hasFile('image')){
            $image=$request->file('image');
            $image=Storage::disk('public')->putFile('jobs',$image);
            $url=Storage::url($image);
        }
        $employe=Auth::user()->employe;
        $job->title=$request->title;
        $job->description=$request->description;
        $job->type=$request->type;
        $job->salary=$request->salary;
        $job->experience=$request->experience;
        $job->gender=$request->gender;
        $job->country=$request->country;
        $job->city=$request->city;
        $job->address=$request->address;
        $job->deadline_date=$request->deadline_date;
        $job->licence_driver=$request->driver_licence;
        $job->save();
        $request->session()->flash('status','dane zostały zapisane z powodzeniem');
        return redirect()->route('job.edit',$job->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $job)
    {
        //
        $job=Job::find($job);
        $job->delete();
        $request->session()->flash('status','zadanie zostało usunięte z powodzeniem');
        return redirect()->route('employes.manage.job');

    }
    public function findJobByValue(Request $request){
        $jobs=Job::where($request->key,'LIKE','%'.$request->value)->paginate(6);
        $total=count(Job::all());
        return view('jobs.index',[
            'jobs'=>$jobs,
            'totale'=>$total
        ]);
    }

    public function findJobByDate(Request $request){
        $time=now();
        $date=$time->hour-$request->value;
        dd($date);

        $jobs=Job::where('created_at',"<=",'%'.$request->value."%")->paginate(6);
        $total=count(Job::all());
        return view('jobs.index',[
            'jobs'=>$jobs,
            'totale'=>$total
        ]);
    }
}
