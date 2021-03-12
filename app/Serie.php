<?php

namespace App;

use App\Domain;
use App\Student;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public function students(){
        return $this->hasMany(Student::class);
    }
    public function domain(){
        return $this->belongsTo(Domain::class);
    }
}
