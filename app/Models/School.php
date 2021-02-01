<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $table = "schools";

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function staff(){
        return $this->hasMany('App\Models\Staff');
    }
}
