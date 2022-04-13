<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCandidateRequest;
use App\Http\Requests\UpdateCandidateRequest;
use App\Models\Candidate;
use App\Models\Country;
use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class CandidateController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidates=Candidate::all();
        return view('candidate.index',[
            'candidates'=>$candidates,
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
     * @param  \App\Http\Requests\StoreCandidateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UpdateCandidateRequest $request)
    {
        //
        if($request->hasFile('image')){
            $image=$request->file('image');
            $image=Storage::disk('public')->putFile('candidate',$image);
            $url=Storage::url($image);
        }

        $data=[
            "first_name"=>$request->first_name,
            'last_name'=>$request->last_name,
            'driver_licence'=>$request->driver_licence,
            'birthday'=>$request->birthday,
            'city'=>$request->city,
            'country'=>$request->country,
            'phone'=>$request->phone,
            'description'=>$request->description,
            'address'=>$request->address,
            'image'=>$url,
            'user_id'=>Auth::user()->id,
            'language'=>$request->language,
            'type'=>$request->type,
            'experience'=>$request->experience,
            'education_levels'=>$request->education_levels,
            'address'=>$request->address
        ];
        Candidate::create($data);
        $request->session()->flash('status','informacje zostały dodane z powodzeniem');
        return redirect()->route('candidate.show.profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function show(Candidate $candidate)
    {
        //
        $countries=Country::all();
        return view('candidate.admin.profile',[
            'candidate'=>$candidate,
            'countries'=>$countries
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function edit(Candidate $candidate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCandidateRequest  $request
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCandidateRequest $request,  $candidate)
    {

        $candidate=Candidate::find($candidate);
        if($request->hasFile('image')){
            $image=$request->file('image');
            $image=Storage::disk('public')->putFile('candidate',$image);
            $url=Storage::url($image);
        }
        $candidate->first_name=$request->first_name;
        $candidate->last_name=$request->last_name;
        $candidate->city=$request->city;
        $candidate->description=$request->description;
        $candidate->country=$request->country;
        $candidate->type=$request->type;
        $candidate->phone=$request->phone;
        $candidate->experience=$request->experience;
        $candidate->education_levels=$request->education_levels;
        $candidate->image=$url;
        $candidate->driver_licence=$request->driver_licence;
        $candidate->birthday=$request->birthday;
        $candidate->address=$request->address;
        $candidate->save();
        $request->session()->flash('status','informacje zostały dodane z powodzeniem');
        return redirect()->route('candidate.show.profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidate  $candidate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Candidate $candidate)
    {
        //
    }

    public function getCandidate(Request $request){
        $request->validate([
            'value'=>"required",
            'key'=>"required",
        ]);
        $candidates=Candidate::where($request->key,$request->value)->get();
        return view('candidate.index',[
            'candidates'=>$candidates,
        ]);
    }

    public function getCandidateCv($id,$job=0){
        $job=Job::find($job);
        $candidate=Candidate::find($id);
        if($job){
            $cv=DB::table('candidate_job')->where('candidate_id',$candidate->id)->where('job_id',$job->id)->get();
        }else{
            $cv=null;
        }

        $age=$candidate->birthday;
        return view('candidate.show',[
            'candidate'=>$candidate,
            "age"=>$age,
            'cv'=>$cv
        ]);
    }

    public function dashboard(){

        if(Auth::user()->user_type=="candidate"){
            $candidate=Auth::user()->candidate;
            if($candidate){
                $applied_jobs=$candidate->jobs()->take(10)->get();
                $jobs=Job::orderBy('created_at','desc');
                return view('candidate.admin.dashboard',[
                    'applied_jobs'=>$applied_jobs,
                    "jobs"=>$jobs,
                    "candidate"=>$candidate
                ]);
            }else{
                $countries=Country::all();
                return view('candidate.admin.profile',[
                    'candidate'=>$candidate,
                    'countries'=>$countries,
                    'message'=>"najpierw uzupełnij swój profil"
                ]);
            }
        }
    }

    public function applied_jobs(){

        $candidate=Auth::user()->candidate;
        if($candidate){
            $applied_jobs=$candidate->jobs()->get();

            return view('candidate.admin.applied-job',[
                'jobs'=>$applied_jobs,
                "candidate"=>$candidate
            ]);
        }else{
            $countries=Country::all();
            return view('candidate.admin.profile',[
                'candidate'=>$candidate,
                'countries'=>$countries,
                'message'=>'najpierw uzupełnij swój profil'
            ]);
        }
    }

    public function getCv(){

        $candidate=Auth::user()->candidate;
        if($candidate){
            $cvs=$candidate->cvs;
            return view('candidate.admin.manage-cv',[
                'cvs'=>$cvs,
                'candidate'=>$candidate
            ]);
        }else{
            $countries=Country::all();
            return view('candidate.admin.profile',[
                'candidate'=>$candidate,
                'countries'=>$countries,
                'message'=>'najpierw uzupełnij swój profil'
            ]);
        }
    }
    public function changePassword(){

        $candidate=Auth::user()->candidate;
        if($candidate){
            return view('candidate.admin.change-password',[
                'candidate'=>$candidate
            ]);
        }else{
            $countries=Country::all();
            return view('candidate.admin.profile',[
                'candidate'=>$candidate,
                'countries'=>$countries,
                'message'=>'najpierw uzupełnij swój profil'
            ]);
        }
    }

    public function getProfile(){
        $id=Auth::user()->id;
        $candidate=Candidate::where('user_id',$id)->get();

        $countries=Country::all();
        return view('candidate.admin.profile',[
            'candidate'=>$candidate[0],
            'countries'=>$countries
        ]);
    }

    public function getFavorite(){
        $candidate=Auth::user()->candidate;
        if($candidate){
            return view('candidate.admin.favorite',[
                'candidate'=>$candidate,
                'jobs'=>$candidate->favorites()->get()
            ]);
        }else{
            return view('candidate.admin.profile',[
                'candidate'=>$candidate[0],
                'countries'=>$countries
            ]);
        }
    }

    public function deleteFavorite(Request $request,$id){
        $candidate=Auth::user()->candidate;
        $job=Job::find($id);
        //$job->liked()->detach($candidate);
        $candidate->favorites()->detach($job);
        $request->session()->flash('status','zadanie usunięte z ulubionych z powodzeniem');
        return redirect()->route('candidate.favorite');
    }

    public function getFavoriteByTitle(Request $request ){
        $candidate=Auth::user()->candidate;
        $jobs=$candidate->favorites()->where('title',$request->title)->get();
        return view('candidate.admin.favorite',[
            'candidate'=>$candidate,
            'jobs'=>$jobs
        ]);
    }

    public function deleteAppliedJob(Request $request,$id){
        $candidate=Auth::user()->candidate;
        $job=Job::find($id);
        $job->candidates()->detach($candidate->id);
        $request->session()->flash('status','aplikacja usunięta z powodzeniem');
        return redirect()->route('candidate.dashboard');
    }

    public function addToFavorite(Request $request,$id){
        $candidate=Auth::user()->candidate;
        $job=Job::find($id);
        $candidate->favorites()->syncWithoutDetaching($job);
        //$job->liked()->syncWithoutDetaching([$candidate->$id]);
        $request->session()->flash('status','zadanie dodane do ulubionych');
        return redirect()->route('job.show',$job->id);
    }

    public function applyJob(Request $request){
        $candidate=Auth::user()->candidate;

        $request->validate([
            'cv'=>'required '
        ]);

        if($request->hasFile('cv')){
            $cv=$request->file('cv');
            $cv=Storage::disk('public')->putFile('cvs',$cv);
            $url=Storage::url($cv);
        }else{
            $url=$request->cv;
        }

        $job=Job::find($request->id);
        $candidate->jobs()->syncWithoutDetaching([
            $job->id=>['cv'=>$url]
        ]);
        $request->session()->flash('status','zastosowanie z sukcesem');
        return redirect()->route('job.show',$job->id);
    }

    public function removeJob(Request $request,$id){
        $candidate=Auth::user()->candidate;
        $job=Job::find($id);
        $candidate->jobs()->detach($job);
        $request->session()->flash('status','aplikacja została usunięta z powodzeniem');
        return redirect()->route('candidate.applied_jobs');

    }

    public function updatePassword(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $user=Auth::user();
        $user->email=$request->email;
        $user->password=Hash::make($request->password);
        $request->session()->flash('status','informacje zostały zaktualizowane z powodzeniem');
        return redirect()->route('candidate.change_password');
    }


}
