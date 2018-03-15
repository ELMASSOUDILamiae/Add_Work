<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

 /**
  * Get the choice record associated with the question.
  * @return [null] [TODO: after thinking]
  */
 public function choix()
 {
     return $this->hasMany('App\Choix');
 }
}
