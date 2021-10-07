<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DayController extends Controller
{
    //date('N') geeft 1 tot en met 7. ! is maandag
    public function index()
    {
        if (date('N') <= 2){
            $tekst = 'start van de week';
        //Succes met je werk week!
        }
        if (date('N') >= 3 
            and date('N') <= 4){
            $tekst = 'Kom op, je bent al over de helft';
            //Kom op, je bent al over de helft!
        }
        if (date('N') == 5){
            $tekst = 'Laatste dag! Je hebt bijna weekend!';
            //Laatste dag! je hebt bijna weekend!
        }
        if (date('N') >= 6 
            and date('N') <= 7){
            $tekst = 'Wat doe je nou achter je computer? Je hebt weekend!';
            //Wat doe je nou achter je computer? Je hebt WEEKEND!
        }
        return view('DayController') ->with(['tekst'=>$tekst]);
    }
}