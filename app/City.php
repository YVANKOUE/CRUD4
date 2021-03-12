<?php

namespace App;
use App\School;
use App\Student;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name', 
    ];
    public function students(){
        return $this->hasMany(Student::class);
    }
    public function schools(){
        return $this->hasMany(School::class);
    }
}
