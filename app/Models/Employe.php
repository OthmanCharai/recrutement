<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    /**
     *  fillable
     */
    protected $fillable=[
        'name',
        'email',
        'category',
        'birthday',
        'Country',
        'city',
        'phone',
        'description',
        'address',
        'image',
        'user_id'
    ];
    /**
     *  rlt with users
     */
    public function user(){
        return $this->belongsTo(User::class);
    }

    /**
     *  rlt with jobs
     */
    public function jobs(){
        return $this->hasMany(Job::class);
    }
}
