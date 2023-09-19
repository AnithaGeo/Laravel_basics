<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Basiccontroller extends Controller
{
    public function home(){
        $data=["name"=>"Anitha",
            "message"=>"hello",
            'names'=>['Ajay','Amal','Anu']];
    return view('welcome',$data);  

    }
}
