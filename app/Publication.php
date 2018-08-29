<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    protected $guarded = [];

    public function publicationuploads(){
    	return $this->belongsTo('App\Menu')
    }
}
