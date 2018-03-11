<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
/*
  The table associated with the model.

  */

    protected  $table="useres";

    public function admins()
{
    return $this->hasOne('App\Admin'); // we have one user as an admin
}

    public function entreprises()
{
    return $this->hasMany('App\Entreprise'); // we have multipe users as entreprise
}

    public function etudiants()
{
    return $this->hasMany('App\Etudiant'); // we have multipe users as student
}


}
