<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BTCController extends Controller
{
    public function showData(){
        $response=Http::get('http://api.coindesk.com/v1/bpi/currentprice.json');
        $data=$response->json();
        $btc= $data['bpi']['USD']['rate'];
        $date= $data['time']['updated'];
        return view('test.tets', compact('btc', 'date'));
    }
    //
}

