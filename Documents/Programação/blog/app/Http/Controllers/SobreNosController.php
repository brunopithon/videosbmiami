<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreNosController extends Controller
{
    function sobrenos(){
        return view('site.sobre-nos');
    }
}
