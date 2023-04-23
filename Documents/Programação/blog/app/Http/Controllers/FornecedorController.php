<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => ['nome'=>'papaizinho','idade'=>'19'],
            1 => ['nome'=>'narutinho','idade'=>'12']
        ];

        // $fornecedores = [];
        return view('app.fornecedor.index', compact('fornecedores'));
    }    
}