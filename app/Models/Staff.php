<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table ="staff";

    public function schools(){
        return $this->belongsTo('App\Models\School');
    }

    public function staff_qulification(){
        return $this->hasMany('App\Models\Staff_Qualification');

    }

}
