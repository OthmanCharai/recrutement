<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'path',
        'candidate_id'
    ];
    /**
     *  rlt with  candidate
     */
    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }

}
