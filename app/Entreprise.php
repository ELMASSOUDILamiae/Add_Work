<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    //


    /**
     * Get the collection that owns the enterprise.
     */
    public function collection()
    {
        return $this->belongsTo('App\Collection');
    }

    /**
    * Get the eannonce for the blog entreprise.
    */
   public function eannonces()
   {
       return $this->hasMany('App\Eannonce');
   }

   /**
   * Get the test for the blog entreprise.
   */
  public function tests()
  {
      return $this->hasMany('App\Test');
  }

}
