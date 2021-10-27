<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class TaalController extends Controller
{
    public function zettaal(Request $request) 
    {
        dd($request->all());
        $keuze = Session::get('keuze');
            if($keuze == 'english');
                return view('en.welcome');
            if($keuze == 'nederlands'){;
                return view('welcome');
            }    
    }
    public function taal(){
        return view('test.taal');
    }

}
