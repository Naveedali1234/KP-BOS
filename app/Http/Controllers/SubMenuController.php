<?php

namespace App\Http\Controllers;

use App\SubMenu;
use Illuminate\Http\Request;
use DB;
class SubMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

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
        $menu_id=$request['menu_id'];
        $name=$request['name'];
        //echo "menu id : " . $menu_id . "  name is :  " . $name ;

        $data=array(
            'name'=>$name,
            'menu_id'=>$menu_id
        );
        DB::table('sub_menus')->insert($data);

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
        $submenus=DB::table('sub_menus')->where('menu_id',$id)->get();
        $menus=DB::table('menus')->get();
         return view('admin-dashboard.menus-management.sub-menus',array('submenus'=>$submenus,'menus'=>$menus));
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
       $sub_menu=DB::Table('sub_menus')->where('id',$id)->get();
       return $sub_menu;
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('sub_menus')->where('id',$id)->delete();
        return back();
    }
    public function editsubmenus(Request $request){
        $id= $request['id'];

        $data=array(
            'name'=>$request['name']
        );
        DB::table('sub_menus')->where('id',$id)->update($data);
        return back();
    }
}
