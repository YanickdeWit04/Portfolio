<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class TaalController extends Controller
{
    public function Taal(Request $request) 
    {
        $value = $request->session()->get('key');
        $request->session()->put('key', 'value');
        session(['key' => 'value']);
        var_dump($request, $value);
        return view('test.taal');
    }
    
}
