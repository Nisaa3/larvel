<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\invoices;
use App\Models\Price;
use App\Models\Transaction;

class profileController extends Controller
{

    public function Create(){
        return view('pages.dashboard')
    }

    public function Store(){
        
    }
    public function Retail(Request $request)
    {
       $invoice = invoices::create([
            'invoiceName' => $request,
            'invoiceNumber' => $request,

        ]);
       $trans = Transaction::create([
            'TransName' => $request,
            'TransNumber' => $request,
       ]);
        $price = Price::create([
            'Price' => $request,
            'ProdName' => $request,
       ]);
        // return view('create', ['invoice' => $invoice, 'trans' => $trans, 'price' => $price]);
    }
}
