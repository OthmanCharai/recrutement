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
        'first_name',
        'last_name',
        'driver_licence',
        'birthday',
        'Country',
        'city',
        'phone',
        'description',
        'address',
        'image',
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
        return $this->hasMany(Jobs::class);
    }
}
