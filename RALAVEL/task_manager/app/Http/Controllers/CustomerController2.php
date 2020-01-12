<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController2 extends Controller
{
    public function index(){

        //tao mang khach hang
        $customers = [
            '0' => [
                'id'  => 1,
                'name'=> 'customer1',
                'bod' => '1998-09-01',
                'email' => 'customer1@gmail.com'
            ],

            '1' => [
                'id'  => 2,
                'name'=> 'customer2',
                'bod' => '1998-09-01',
                'email' => 'customer2@gmail.com'
            ],

            '2' => [
                'id'  => 3,
                'name'=> 'customer3',
                'bod' => '1998-09-01',
                'email' => 'customer3@gmail.com'
            ]
        ];

        //goi view va truyen du lieu sang view
        return view('customers.list', compact('customers'));
      }
}
