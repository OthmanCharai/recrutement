<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeRequest;
use App\Http\Requests\UpdateEmployeRequest;
use App\Models\Country;
use App\Models\Employe;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EmployeController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('employer.index');
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
     * @param  \App\Http\Requests\StoreEmployeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeRequest $request)
    {
        //

        if($request->hasFile('image')){
            $image=$request->file('image');
            $image=Storage::disk('public')->putFile('employes',$image);
            $url=Storage::url($image);
        }
        $id=Auth::user()->id;
        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'category'=>$request->category,
            'birthday'=>$request->birthday,
            'Country'=>$request->country,
            'city'=>$request->city,
            'phone'=>$request->phone,
            'description'=>$request->description,
            'address'=>$request->address,
            'image'=>$url,
            'user_id'=>$id
        ];
        Employe::create($data);
        $request->session()->flash('status','informacje zostały dodane z powodzeniem');
        return redirect()->route('employes.profile');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $employe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeRequest  $request
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(StoreEmployeRequest $request,  $employe)
    {
        //


        $employe = Employe::find($employe);

        if($request->hasFile('image')){
            $image=$request->file('image');
            $image=Storage::disk('public')->putFile('employes',$image);
            $url=Storage::url($image);
        }
        $employe->name=$request->name;
        $employe->email=$request->email;
        $employe->category=$request->category;
        $employe->birthday=$request->birthday;
        $employe->Country=$request->country;
        $employe->city=$request->city;
        $employe->phone=$request->phone;
        $employe->description=$request->description;
        $employe->address=$request->address;
        $employe->image=$url;
        $employe->save();
        $request->session()->flash('status','informacje zostały zaktualizowane z powodzeniem');
        return redirect()->route('employes.profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe)
    {
        //
    }

    // get dashboard
    public function dashboard(){
        if(Auth::user()->user_type=="employe"){
            $employe=Auth::user()->employe;
            if($employe){
                $jobs=Job::where('employe_id',$employe->id)->with('candidates')->get();
                $applied_jobs=Job::where('employe_id',$employe->id)->whereHas('candidates')->get();
                return view('employer.admin.dashboard',[
                    'employe'=>$employe,
                    'jobs'=>$jobs,
                    'applied_jobs'=>$applied_jobs
                ]);
            }else{
                $countries=Country::all();
                return view('employer.admin.profile',[
                    'employe'=>$employe,
                    'countries'=>$countries
                ]);
            }
        }
    }

    // get profile
    public function getProfile(){
        $employe=Auth::user()->employe;
        $countries=Country::all();
        return view('employer.admin.profile',[
            'employe'=>$employe,
            'countries'=>$countries
        ]);
    }

    public function postJob(){
        if(Auth::user()->user_type=="employe"){
            $employe=Auth::user()->employe;
            if($employe){
                $employe=Auth::user()->employe;
                $countries=Country::all();
                return view('employer.admin.post-job',[
                    'employe'=>$employe,
                    'countries'=>$countries
                ]);
            }else{
                $countries=Country::all();
                return view('employer.admin.profile',[
                    'employe'=>$employe,
                    'countries'=>$countries
                ]);
            }
        }
    }

    public function manageJob(){
        if(Auth::user()->user_type=="employe"){
            $employe=Auth::user()->employe;
            if($employe){
                $jobs=Job::where('employe_id',$employe->id)->with('candidates')->get();
                $applied_jobs=Job::where('employe_id',$employe->id)->whereHas('candidates')->get();
                $active_jobs=Job::where('employe_id',$employe->id)->where('status','active')->get();
                return view('employer.admin.manage-job',[
                    'employe'=>$employe,
                    'jobs'=>$jobs,
                    'applied_jobs'=>$applied_jobs,
                    'active_jobs'=>$active_jobs,
                ]);
            }else{
                $countries=Country::all();
                return view('employer.admin.profile',[
                    'employe'=>$employe,
                    'countries'=>$countries
                ]);
            }
        }
    }

    public function findJob(Request $request){
        $employe=Auth::user()->employe;
        $jobs=Job::where('employe_id',$employe->id)->where('title',$request->title)->with('candidates')->get();
        $applied_jobs=Job::where('employe_id',$employe->id)->whereHas('candidates')->get();
        $active_jobs=Job::where('employe_id',$employe->id)->where('status','active')->get();
        return view('employer.admin.manage-job',[
            'employe'=>$employe,
            'jobs'=>$jobs,
            'applied_jobs'=>$applied_jobs,
            'active_jobs'=>$active_jobs,
        ]);
    }

    public function changeStatus(Request $request,$id){
        $job=Job::find($id);
        if($job->status=="active"){
            $job->status="inactive";
        }else{
            $job->status="active";
        }
        $job->save();
        $request->session()->flash('status','informacje zostały zaktualizowane z powodzeniem');
        return redirect()->route('employes.manage.job');
    }

    public function changePassword(){
        $employe=Auth::user()->employe;
        return view('employer.admin.change-password',[
            'employe'=>$employe
        ]);
    }

    public function savePassword(Request $request){
        $employe=Auth::user();
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $employe->email=$request->email;
        $employe->password=$request->password;
        $employe->save();
        $request->session()->flash('status','informacje zostały zaktualizowane z powodzeniem');
        return redirect()->route('employes.change.password');
    }

    public function getCandidateJob($id){

        $job=Job::find($id);
        $candidates=$job->candidates;
        return view('employer.candidate-applied',[
            'candidates'=>$candidates,
            'employe'=>Auth::user()->employe,
            'job'=>$job
        ]);
    }

    public function findJobByValue(Request $request){
        dd($request);
    }
}
