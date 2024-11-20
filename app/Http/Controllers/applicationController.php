<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class applicationController extends Controller
{
    public function App(){
        return view('forms/application');
    }
}
