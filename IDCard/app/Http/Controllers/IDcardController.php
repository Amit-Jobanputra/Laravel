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
      
    function attendance(Request $r)
    {
        DB::table('attendence')->insert([
            'student_id' => $r->student_id,
            'course_id' => $r->course_id,
            'date' => $r->date,
            'status'=> $r->status,
        ]);
        return response()->json([
            'student_id' => $r->student_id,
            'course_id' => $r->course_id,
            'date' => $r->date,
            'status'=> $r->status,
        ]);
    }
    function course(Request $r)
    {
        DB::table('course')->insert([
            'department_id'=>$r->department_id,
            'course_code'=>$r->course_code,
            'title'=>$r->title,
            'description'=>$r->description,
            'credits'=>$r->credits,
        ]);
        return response()->json([
            'department_id'=>$r->department_id,
            'course_code'=>$r->course_code,
            'title'=>$r->title,
            'description'=>$r->description,
            'credits'=>$r->credits,
        ]);
    }
    function retrive()
    {
        $data=DB::table('attendence')->get(); 
        return response()->json([
            'code'=>200,
            'message'=>'Sucess',
            'data'=>$data
        ]);
    }
    function onerecord($id)
    {
        $data=DB::table('attendence')->where('id',$id)->first(); 
        return response()->json([
            'code'=>200,
            'message'=>'Sucess',
            'data'=>$data
        ]);
    }
    function exam(Request $r){
        DB::table('exam')->insert([
            'firstName' => $r->firstName,
            'lastName' => $r->lastName,
            'age'=>$r->age,
            'mobile'=>$r->mobile
        ]);
        return response()->json([
            'firstName' => $r->firstName,
            'lastName' => $r->lastName,
            'age'=>$r->age,
            'mobile'=>$r->mobile
        ]);
    }
    function record()
    {
        $data=DB::table('exam')->get(); 
        return response()->json([
            'code'=>200,
            'message'=>'Sucess',
            'data'=>$data
        ]);
    }
    function singlerecord($id){
        $data=DB::table('exam')->where('id',$id)->first();
        return response()->json([
            'code'=>200,
            'message'=>'Sucess',
            'data'=>$data
        ]);
    }
    function delete($id){
        $data=DB::table('exam')->where('id',$id)->delete();
        return response()->json([
            'code'=>200,
            'message'=>'Sucess'
        ]);
    }
}
