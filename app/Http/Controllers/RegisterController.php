<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('register');
    }
    public function register(Request $request)
     {
        $name = $request->input('name');
        DB::insert('insert into tbltest (name) values(?)',[$name]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/">Click Here</a> to go back.';
     }
}
