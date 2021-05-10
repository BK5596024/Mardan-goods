<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Pnlinh\GoogleDistance\Facades\GoogleDistance;




class Laravel extends Controller
{
    //
    function index()
    {
        return view('index');
    }

    function ShowMethodID($id)
    {
        return $id;
    }

    function location(Request $request)
    {
        $request->validate([
            'cars'=>'required',
            'picklocation'=>'required |max:50',
            'droplocation'=>'required |max:50'
            
        ]);
        $ploc=$request->input('picklocation');
         $dloc=$request->input('droplocation');

         //$distance = GoogleDistance::calculate('$ploc', '$drop');

        // Use Helper Function
        //$distance = google_distance('From Address', 'To Address');
         
         return view('service')->with('pickloc', $ploc)->with('droploc', $dloc)->with('dist', 160);
         
         //return View::make("service")->with($data);
        
         
       
    }
    
    function type(Request $request)
    {
       //return $request->all();
        $type=$request->input('type');

      if($type == 'business')
       {
            return redirect('detail');
        }
      
     else
       {
            return redirect('detail');
        }


    }


    
    function calculateprice(Request $request)
    {
       //return $request->all();
       $request->validate([
        'matname'=>'required',
        'weight'=>'required |Integer',
        'height'=>'required |Integer|max:50',
        'width'=>'required |Integer|max:50',
        'date'=>'required |max:50'

        
    ]);
        $mname=$request->input('matname');
        $weight=$request->input('weight');
        $height=$request->input('height');
        $width=$request->input('width');
        $length=$request->input('length');
        $date=$request->input('date');

        $price=$weight*12;
        
        return view('display')->with('matname', $mname)->with('weight', $weight)
        ->with('height', $height)->with('width', $width)->with('length', $length)
        ->with('price', $price)->with('date', $date);

        
     


    }



    function verify(Request $request)
    {
       /* 
       //return $request->all();
       $mname = $request->input('mname');
       $weight = $request->input('weight');
       $date = $request->input('date');
       $price = $request->input('price');
       DB::insert('insert into users (mname, weight,date,total) values (?, ?,?,?)', [$mname, $weight,$date,$price]);
      // DB::table(users)->insert([
         

       //]);
       */
       //return $request->all();
       $mname = $request->input('mname');
       $weight = $request->input('weight');
       $height = $request->input('height');
       $width = $request->input('width');
       $length = $request->input('length');
       $price = $request->input('price');
       $date = $request->input('date');
       
       $location = "islamabad->peshawar";
       DB::insert('insert into productdetail (mname, weight,height,width,length,price,date,location) values (?,?,?,?,?,?,?,?)', [$mname, $weight,$height,$width,$length,$price,$date,$location]);
      // DB::table(users)->insert([
         

       //]);
    
      return view('confirm');




    
      return view('confirm');

    }

    function RegisterClient(Request $request)
    {
        
       //return $request->all();
       $name = $request->input('name');
       $cnic = $request->input('cnic');
       $city = $request->input('city');
       $email = $request->input('email');
       $phoneno = $request->input('phoneno');
       $password = $request->input('password');
       DB::insert('insert into clients (name,cnic,city,email,phoneno,password) values (?,?,?,?,?,?)', [$name, $cnic,$city,$email,$phoneno,$password]);
      // DB::table(users)->insert([
         

       //]);
    
      return ('successfully register');

    }


    
    function Login(Request $request)
    {
        
       //return $request->all();
       $email=$request->input('userid');
       $pass=$request->input('password');

                $user = DB::table('clients')->where('email','=', $email)->get();
                foreach($user as $row)
                {
                    if ($pass==$row->password) 
                    {
                        # code...
                        return redirect('index');
                    }
                    else
                    {
                        return redirect('signup');
                    }
                    

                }
       
    
      return ('successfully register');

    }



    function laodview($user)
    {
        return view('index',['name'=>$user]);
    }

    function miles(Request $request)
    {
        $pick=str_replace('','',$request->input('pick'));
        $delivery=str_replace('','',$request->input('delivery'));


       
        //$key='AIzaSyBEYcOpF8doUsqqaksgFw1W20f-3YyK8bw';
        $key="AIzaSyATNOFV4jJ-3m7XRR1jKW2xVVs40DQxJgI";
        //$milage_result=file_get_contents('https://maps.googleapis.com/map/api/distancematrix/json?units=imperial&origins='.$pick.'$destination='.$delivery.'&key=$key');

        $milage_result=file_get_contents('http://maps.googleapis.com/maps/api/distancematrix/json?origins={$pick}&destin‌​ations={$delivery}&mode=driving&language=English-en&key=$key');
        
    
        //$url = "http://maps.googleapis.com/maps/api/distancematrix/json?origins={$pick}&destinations={$delivery}&mode=driving&language=English-en&key=$key";

        //$json = file_get_contents($url); // get the data from Google Maps API
        //$result = json_decode($json, true); // convert it from JSON to php array

        $api = file_get_contents("https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=".$pick."&destinations=".$delivery."&key=AIzaSyCW_gooK-EIFZz1dI-I7nVfws8Pv7h4jF4");
        $data = json_decode($api);

        //echo ((int)$data->rows[0]->elements[0]->distance->value / 1000).' Km';
        //echo $result['rows'][0]['elements'][0]['distance']['text'];


        /*
        $url="http://maps.googleapis.com/maps/api/distancematrix/json?origins={$pick}&destin‌​ations={$delivery}&mode=driving&language=English-en&key={$key}";
        $url = "http://maps.googleapis.com/maps/api/distancematrix/json?origins={$pick}&destinations={$delivery}&mode=driving&language=English-en&key={$key}";
        $json = file_get_contents($url); // get the data from Google Maps API
        $result = json_decode($json, true); // convert it from JSON to php array

        echo $result['rows'][0]['elements'][0]['distance']['text'];
        */
        ///
        
        $milage_result=json_decode($milage_result);
        $milage_result;
        dd($milage_result);

        //$milage=$milage_result->row[0]->elements[0]->distance->text;
        //$clean_miles=preg_replace('/[^0-9.]+/','',$milage );
        //dd(sclean_moles);

        
    }
}


