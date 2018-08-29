<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class testController extends Controller
{
	public function index(){
    $menus=DB::Table('menus')->get();

    return view('welcome',array('menus'=>$menus));
}
}
