<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff_Qualification extends Model
{
    use HasFactory;
    protected $table = "staff__qualifications";

    public function staff(){
        return $this->belongsTo('App\Models\Staff');
    }
}
