<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCvRequest;
use App\Http\Requests\UpdateCvRequest;
use App\Models\Cv;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreCvRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCvRequest $request)
    {

        $candidate=Auth::user()->candidate;
        //
        if($request->hasFile('path')){
            $path=$request->file('path');
            $path=Storage::disk('public')->PutFile('cvs',$path);
            $url=Storage::url($path);
        }
        $data=[
            'title'=>$request->title,
            'path'=>$url,
            'candidate_id'=>$candidate->id,
        ];
        Cv::create($data);
        $request->session()->flash('status','cv zostało dodane z powodzeniem');
        return redirect()->route('candidate.cv');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function show(Cv $cv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function edit(Cv $cv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCvRequest  $request
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCvRequest $request, Cv $cv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $cv)
    {
        //
        $cv=Cv::find($cv);
        $cv->delete();
        $request->session()->flash('status','cv zostało usunięte z powodzeniem');
        return redirect()->route('candidate.cv');

    }
}
