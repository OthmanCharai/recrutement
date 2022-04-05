<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'type',
        'salary',
        "experience",
        'gender',
        'country',
        'city',
        'address',
        'image',
        'status',
        'deadline_date',
        'licence_driver',
    ];
    /**
     *  rlt with candidate
     */
    public function candidates(){
        return $this->belongsToMany(Candidate::class)->withPivot('cv')->withTimestamps();
    }
    /**
     * rlt with with employer
     */
    public function employe(){
        return $this->belongsTo(Employe::class);
    }
    /**
     *  rlt with candidate
     */
    public function liked(){
        return $this->belongsToMany(Candidate::class,'favorites','candidate_id','job_id')->withTimestamps();
    }
}
