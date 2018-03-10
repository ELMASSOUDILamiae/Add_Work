<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    //


    /**
 * Get the cv for the blog etudiant (one to many).
 */
public function cvs()
{
    return $this->hasMany('App\Cv');
}

/**
* The question that belong to etudiant(many to many).
*/
public function questions()
{
return $this->belongsToMany('App\Question','QuestionEtudiant');
}
}
