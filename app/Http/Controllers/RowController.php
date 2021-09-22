<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RowController extends Controller
{
    // een functie die aan een view meegeeft hoeveel item in een rij.

    public function rowItems(){
        $count = 12; //variable met de waarde 12

        return view(view: 'row')->with(['rows'=>$count]); //einde van mijn functie
    }
}
