<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles(){
        return $this->belongsToMany('App\Role');
    }
    public function Categorie(){
        return $this->belongsToMany('App\Categorie', 'categorie_user', 'user_id', 'categorie_id');
    }
    
    public function isAdmin(){
        return $this->roles()->where('name','admin')->first(); 
        // si la colone name est egal a admin on recupére le premier element trouvé
    }
    public function hasAnyRole(array $roles){
           return $this->roles()->whereIn('name', $roles)->first(); //whereIn parceque on veut recupéré un tableau avec tous les roles
    }
}
