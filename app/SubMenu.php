<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    protected $guarded = [];

    public function menu(){
    	return $this->belongsTo('App\Menu');
    }
}
