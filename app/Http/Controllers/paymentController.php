<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\invoice;

class paymentController extends Controller
{
    //
    public function pay(){
        $table = invoice::all();
        return view('payment', ['table' => $table]);
    }
}
