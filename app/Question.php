<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //


    /**
  * Get the choice record associated with the question.
  */
 public function choix()
 {
     return $this->hasOne('App\Choix');
 }
}
