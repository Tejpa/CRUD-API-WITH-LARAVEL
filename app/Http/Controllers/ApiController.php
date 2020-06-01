<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\students;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function store(Request $request)
    {
    	$student = new students;

    	$student->name = $request->name;
    	$student->email = $request->email;
    	$student->password = Hash::make($request->password);
    	
    	$student->save();

    	return response()->json($student);
    }

    public function show()
    {
      $student = students::all();
      return response()->json($student);
    }

    public function getStudentById($id)
    {
      $student = students::find($id);
     // $student = students::where('id',$id)->first(); you can use this also
      return response()->json($student);
    }

    public function updateStudentById(Request $request,$id)
    {
    	$student = students::find($id);

    	$student->name = $request->input('name');
    	$student->email = $request->input('email');
    	$student->password = Hash::make($request->input('password'));
    	$student->save();

    	return response()->json($student);
    }

    public function deleteStudentById($id)
    {
    	$student = students::find($id);
    	$student->delete();
    	return response()->json($student);
    }
}
