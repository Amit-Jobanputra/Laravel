<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=DB::table('student')->get();
        return view('display',compact('data'));    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('From');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $r)
    {
            $r->validate([
                'Name'=>"required|string|max:255",
                'Registration_No'=>"required|digits:11",
                'Enrollment_No'=>"required|digits:9",
                'Address'=>"required|string|max:255",
                'Phone_No'=>"required|digits:10",
                'Parents_Phone_No'=>"required|digits:10"
            ]);
            $data=DB::table('student')->insert([
                'Name'=>$r->Name,
                'Registration_No'=>$r->Registration_No,
                'Enrollment_No'=>$r->Enrollment_No,
                'Address'=>$r->Address,
                'Phone_No'=>$r->Phone_No,
                'Parents_Phone_No'=>$r->Parents_Phone_No
            ]);
            if($data){
                return redirect()->route('displayData');
            }
            else{
                return redirect()->route('create');
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DB::table('student')->where('id',"=", $id)->first();
        return view('SingleData',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DB::table('student')->where('id',"=", $id)->first();
        return view('Edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $r, string $id)
    {
        $data=DB::table('student
        ')->where('id','=',$id)->update([
            'Name'=>$r->Name,
            'Registration_No'=>$r->Registration_No,
            'Enrollment_No'=>$r->Enrollment_No,
            'Address'=>$r->Address,
            'Phone_No'=>$r->Phone_No,
            'Parents_Phone_No'=>$r->Parents_Phone_No
        ]);
        if($data){
            return redirect()->route('displayData');
        }
        else{
            return redirect()->route('edit',[$id]);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data=DB::table('student')->where('id','=',$id)->delete();
        return redirect()->route('displayData');
    }
}
