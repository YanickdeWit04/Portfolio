<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TafelController extends Controller
{
    public function index(){
            return view('tafel');
    }

    public  function store(Request $request){
        $tafel_van = $request->nummer;
        // Als nummer hoger is dan 10 fuck you
        for ($nummer=1; $nummer <= 10; $nummer++){
            echo "$tafel_van x $nummer = " . ($nummer * $tafel_van);
            echo "<br>";
        }
        // echo "$tafel_van x 1 = " . (1 * $tafel_van);
        // echo ("<br>");
        // echo "$tafel_van x 2 = " . (2 * $tafel_van);
        // echo ("<br>");
        // echo "$tafel_van x 3 = " . (3 * $tafel_van);
        // echo ("<br>");
        // echo "$tafel_van x 4 = " . (4 * $tafel_van);
        // echo ("<br>");
        // echo "$tafel_van x 5 = " . (5 * $tafel_van);
        // echo ("<br>");
        // echo "$tafel_van x 6 = " . (6 * $tafel_van);
        // echo ("<br>");
        // echo "$tafel_van x 7 = " . (7 * $tafel_van);
        // echo ("<br>");
        // echo "$tafel_van x 8 = " . (8 * $tafel_van);
        // echo ("<br>");
        // echo "$tafel_van x 9 = " . (9 * $tafel_van);
        // echo ("<br>");
        // echo "$tafel_van x 10 = " . (10 * $tafel_van);
    }

}

