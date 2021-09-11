<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Batch;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('Student/index')->with('students', $students);
    }

    public function create()
    {
        return view('Student/create');
    }   
    public function store()
    {
        $student = new Student;
        $student->StudentName = $_POST['studentname'];
        $student->Phone = $_POST['phone'];
        $student->Address = $_POST['address'];
        $student->save();
        $students = Student::all();
        return view('Student/index')->with('students', $students);
    
    }
    public function edit($id)
    {
        $students = Student::find($id);
        return view('Student/edit')->with('students', $students);
    }

    public function update($id)
    {
     $student = Student::where('id',$id);
     $student->update([
         'Studentname'=>$_POST['studentname'],
         'Phone'=>$_POST['phone'],
         'Address'=>$_POST['address'],
     ]);
     $students = Student::all();
     return view('Student/index')->with('students', $students);   
    }

    public function destroy($id)
    {
        $student = Student::where('id',$id);
        $student->delete();
        $students = Student::all();
        return view('Student/index')->with('students', $students);
    }
}
