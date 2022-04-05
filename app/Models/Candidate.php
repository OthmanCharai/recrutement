<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

    /**
     *  fillable
     */
    protected $fillable = [
        "first_name",
        'last_name',
        'driver_licence',
        'birthday',
        'city',
        'country',
        'phone',
        'description',
        'address',
        'image',
        'language',
        'type',
        'experience',
        'user_id',
        'education_levels'
    ];
    /**
     *  rlt with users
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     *  rlt with cvs
     */

    public function cvs(){
        return $this->hasMany(Cv::class);
    }

    /**
     *  rlt with jobs
     */
    public function jobs(){
        return $this->belongsToMany(Job::class)->withPivot('cv')->withTimestamps();
    }

    /**
     * favorite jobs
     */
    public function favorites(){
        return $this->belongsToMany(Job::class,'favorites','candidate_id','job_id')->withTimestamps();
    }
}
