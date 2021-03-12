<?php

namespace App;

use App\City;
use App\faculty;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $fillable = [
        'name','city_id', 'address', 'description', 'logo', 'localisation', 'Devenir', 'TypeUniversité'
    ];

    public function city(){
        return $this->belongsTo(City::class);
    }
    public function faculties(){
        return $this->belongsToMany(faculty::class);
    }
}
