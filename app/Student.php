<?php

namespace App;

use App\City;
use App\User;
use App\Serie;
use App\faculty;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function serie(){
        return $this->belongsTo(Serie::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function faculties(){
        return $this->belongsToMany(faculty::class);
    }
}
