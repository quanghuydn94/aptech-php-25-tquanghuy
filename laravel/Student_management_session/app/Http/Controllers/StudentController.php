<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $students = array();
        session_start();
        if (isset($_SESSION['students'])) {
            $students = $_SESSION['students'];
        }
        return view('index')->with('students', $students);
    }
    public function create()
    {
        return view('create');
    }
    public function store()
    {
        if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['phone'])) 
        {
            session_start();
            if(isset($_SESSION['students'])) {
                $student = array(
                    'Id'=>(int)$_POST['id'],
                    'Name'=>$_POST['name'],
                    'Phone'=>$_POST['phone']
                );
                $_SESSION['students'][(int)$_POST['id']] = $student;
            } else {
                $_SESSION['students'] = array();
                $student = array(
                    'Id'=>(int)$_POST['id'],
                    'Name'=>$_POST['name'],
                    'Phone'=>$_POST['phone']
                );
                $_SESSION['students'][(int)$_POST['id']] = $student;
            }
            $students = $_SESSION['students'];
            return view('index')->with('students', $students);
        } 
        return view('create');
    }

    public function edit($id) 
    {
        session_start();
            $students = $_SESSION['students'][(int)$id];
        
        return view('edit')->with('students', $students);
    
    }

    public function update($id)
    {
        session_start();
        if(isset($_SESSION['students']))
        {
            (int)$_POST['id'] = $id;
            $student = array(
                'Id'=>$id,
                'Name'=>$_POST['name'],
                'Phone'=>$_POST['phone']
            );
            $_SESSION['students'][$id] = $student;
        }
        $students = $_SESSION['students'];
        return view('index')->with('students', $students);

    }
    public function destroy($id)
    {
        session_start();
        unset($_SESSION['students'][(int)$id]);
        $students = $_SESSION['students'];
        return view('index')->with('students', $students);
    }
}
