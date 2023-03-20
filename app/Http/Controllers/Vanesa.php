<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vanesa extends Controller
{
    //

    public function  genera_numero() {
        $num = rand (1,1000);
        return view("vanesa", ['numero'=>$num]);
    }
}
