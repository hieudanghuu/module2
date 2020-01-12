<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){
        $customers = DB::select('select * from students');
        return view('customers.index',[
            'customers' => $customers
        ]
    );
    }
}
