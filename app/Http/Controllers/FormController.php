<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function index(){
        //show fomr blade to input
        return view('form');
    }
    public  function store(Request $request){
        //verwerk de data? maar waar komt dat vandaan?
        //request
        if($request['voornaam'] === 'Yanick'){
            echo "Hoi Yanick";
        }else{
            echo "Rot op";
        }
    }


}