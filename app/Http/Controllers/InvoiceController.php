<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\invoice;

class InvoiceController extends Controller
{
    public function index()
    {
        $data = invoice::all();

        // $data = Invoice::where('title', 'something')->get();
        // Invoice::create([
        //     'title' => 'something',
        
        // ]);
        // $data = 'text';
        // return view('invoices', ['data' => $data]);
        return view('invoices', ['data' => $data]);

    }

    public function create()
    {
       $data = invoice::create([
            'title' => 'My name is shady',
        ]);
        // $Columns = invoice::get([

        // ]);
        $Columns = 'title';
        return view('create', ['Data' => $data, 'Columns' => $Columns]);
    }
}
