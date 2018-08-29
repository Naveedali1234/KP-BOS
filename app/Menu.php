<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $guarded = [];

    public function submenus(){
    	return $this->hasMany('App\SubMenu');
    }
}
