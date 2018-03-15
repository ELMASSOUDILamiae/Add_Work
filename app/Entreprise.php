<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    /**
    * Get the eannonce for the blog entreprise.
    */
   public function eannonces()
   {
       return $this->hasMany('App\eannonce');
   }

   /**
   * Get the test for the blog entreprise.
   */
  public function tests()
  {
      return $this->hasMany('App\Test');
  }
/**
 * the collections of the given entreprise.
 */
public function collections()
{
    return $this->hasMany('App\Collection');
}

}
