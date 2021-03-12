<?php

namespace App;

use App\School;
use App\Student;
use Illuminate\Database\Eloquent\Model;

class faculty extends Model
{
    public function schools(){
        return $this->belongsToMany(School::class);
    }
    public function students(){
        return $this->belongsToMany(Student::class);
    }
}
