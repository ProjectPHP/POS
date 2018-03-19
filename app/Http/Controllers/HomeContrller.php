<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeContrller extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
    public function about()
    {
        $name="chanthou";
        return view('about')->with('data',$name);
    }

    // public function insertform()
    // {
    //     return view('stud_create');
    //  }
      
     
  
    
}
