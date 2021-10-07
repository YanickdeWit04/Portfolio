<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function index(){
        //show fomr blade to input
        return view('welcome');
    }
    public  function store(Request $request){
        //verwerk de data? maar waar komt dat vandaan?
        //request
        if($request['username'] === 'Yanick'){
            if($request['wachtwoord'] === 'test1234'){
                return view('dashboard');
            }
        }
    }
}