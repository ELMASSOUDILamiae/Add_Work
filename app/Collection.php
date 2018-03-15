<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{


    /**
 * The tests that belong to the collection.
 */
public function tests()
{
    return $this->belongsToMany('App\Test','TestCollection');
}

/**
* The cvss that belong to the collection.
*/
public function cvs()
{
return $this->belongsToMany('App\Cv','CvCollection');
}
    /**
     * Get the entreprise that owns the collection.
     */
public function enterprise()
{
    return $this->belongsTo('App\enterprise');
}
}
