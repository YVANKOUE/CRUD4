<?php

namespace App;

use App\Serie;
use Illuminate\Database\Eloquent\Model;

class Domain extends Model
{
  public function series(){
        return $this->hasMany(Serie::class);
    }
}
