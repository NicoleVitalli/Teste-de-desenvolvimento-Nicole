<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function cadastro()
    {
        return view('cad');
    }
 
}
