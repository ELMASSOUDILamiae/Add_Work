<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{



    /*
      Get the articles for the blog admin
      relation one to many
      */
    public function articles()
   {
       return $this->hasMany('App\Article');
   }

   /*
     Get the multimedia for the blog admin
     relation one to many
     */
   public function multimedias()
  {
      return $this->hasMany('App\Multimedia');
  }

  /*
    Get the annonce for the blog admin
    relation one to many
    */
  public function annonces()
 {
     return $this->hasMany('App\Annonce');
 }
}
