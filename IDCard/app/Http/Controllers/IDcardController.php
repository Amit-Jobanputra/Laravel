<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class IDcardController extends Controller
{
    public function store(Request $r)
    {
        DB::table('test')->insert([
            'FirstName' => $r->FirstName,
            'FatherName' => $r->FatherName,
            'LastName' => $r->LastName,
        ]);
        return response()->json([
            'FirstName' => $r->FirstName,
            'FatherName' => $r->FatherName,
            'LastName' => $r->LastName,
        ]);
    }
}
