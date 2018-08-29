<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;
use DB;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus=DB::Table('menus')->get();

       return view('admin-dashboard.menus-management.menus',array('menus'=>$menus));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       $data=array(
           'name'=>$request['name']
       );
       DB::table('menus')->insert($data);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
      $menu= DB::table('menus')->where('id',$id)->get();
        return $menu;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $data=array(
            'name'=>$request['name']
        );
        DB::table('menus')->where('id',$id)->update($data);
        return back();
    }
    public function editmenus(Request $request){
        $id= $request['id'];
        $data=array(
            'name'=>$request['name']
        );
        DB::table('menus')->where('id',$id)->update($data);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      DB::table('menus')->where('id',$id)->delete();
        return back();
    }
}
