<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index()
    {

        return view('index');
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        return 'chưa làm';
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function delete($id)
    {
        return 'chưa làm';
    }
}
