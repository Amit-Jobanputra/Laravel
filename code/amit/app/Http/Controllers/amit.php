<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class amit extends Controller
{
  function submit(Request $req)
  {
    $data = $req->all();
    // return $data;
    return view('display',compact('data')); 

  }
}
