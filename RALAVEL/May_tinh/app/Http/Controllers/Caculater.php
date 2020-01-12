<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Caculater extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function operation(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        switch ($request->opera) {
            case 'cong':
                $result = $num1 + $num2;
            break;
            case 'tru':
                $result = $num1 - $num2;
            break;
            case 'nhan':
                $result = $num1 * $num2;
            break;
            case 'chia':
                $result = $num1 / $num2;
            break;
        }
        return view('index', compact('result'));
    }
}
