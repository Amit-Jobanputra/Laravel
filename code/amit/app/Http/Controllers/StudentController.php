<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use DB;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=DB::table('students')->get();
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
    public function store(Request $request)
    {
        $data=DB::table('students')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
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
        $data = DB::table('students')->where('id',"=", $id)->first();
        return view('SingleData',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DB::table('students')->where('id',"=", $id)->first();
        return view('Edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=DB::table('students')->where('id','=',$id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'city' => $request->city,
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
        $data=DB::table('students')->where('id','=',$id)->delete();
        return redirect()->route('displayData');
    }
}
