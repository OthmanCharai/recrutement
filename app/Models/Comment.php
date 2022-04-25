<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable=[
        'content',
        'candidate_id'
    ];

    public function candidate(){
        return $this->belongsTo(Candidate::class);
    }
}
