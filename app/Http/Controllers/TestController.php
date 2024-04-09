<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index($nom){
        return 'salam' . $nom;
    }
}
class TestController2 extends Controller
{
    
}
