<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Profile as pr;

class MainController extends Controller
{
    public function __construct(){
        //$this->middleware('auth');
    }

    public function profile($username){
        $data=pr::where('username',$username)
        ->where('username',$username)
        ->first();
        // echo "<pre>"; 
        // print_r($data);
        // echo"</pre>";

        // foreach($data as $key => $value){
        //     echo $key."<br>";
        // echo $data[$key]->name;
        // echo $value->name;

        // }
        return view('profile')->with('data',$data);     
    }

    public function homePage(){
        $data=pr::where('profile')
        ->get();
        return view('homepage')->with('data',$data);
    }
}

