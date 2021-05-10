<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class FYP extends Controller
{
    function miles(Request $request)
    {
        $pick=str_replace('','',$request->input('pick'));
        $delivery=str_replace('','',$request->input('delivery'));
        
        $milage_result=file_get_contents('https://maps.googleapis.com/map/api/distancematrix/json?units=imperial&origins='.$pick.'$destination='.$delivery.'&key='.env('GOOGLE_MAPS_API_KEY'));

        $milage_result=json_decode($milage_result);
        dd($milage_result);

        $milage=$milage_result->row[0]->elements[0]->distance->text;
        $clean_miles=preg_replace('/[^0-9.]+/','',$milage );
        dd(sclean_moles);

        
    }

    function dashboard(Request $request)
    {
      
        //$users = DB::table('users')->select('id','name','email')->get();
        //return view('some-view')->with('users', $users);

        //$users = DB::select('select * from users');
        //return view('admin.index',['userdata'=>$users]); 
       
       
        // return view('admin.index');

       $productdetail = DB::select('select * from productdetail');
        return view('admin.index',['pdetail'=>$productdetail ]); 


    }
    function check(Request $request)
    {
      return view('admin.check');


    }
}
