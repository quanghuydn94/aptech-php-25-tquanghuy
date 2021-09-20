<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    public function index()
    {
        $students = array();
        if (session()->has('studentList')) {
            $students = session()->get('studentList');
        } else {
            session()->put('studentList', array());
        }
        return response()->view('Session/index', ['students' => $students]);
    }
    public function create()
    {
        return response()->view('Session/create');
    }
    public function store(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $batch = $request->input('batch');
        $phone = $request->input('phone');

        if (session()->has('studentList')) {
            $student = array(
                'Id' => $id,
                'StudentName' => $name,
                'Batch' => $batch,
                'Phone' => $phone,
            );
            session()->push('studentList', $student);
        } else {
            $student = ([
                'Id' => $id,
                'StudentName' => $name,
                'Batch' => $batch,
                'Phone' => $phone,
            ]);
            session()->put('studentList', array($student));
        }
        return redirect()->route('session.index');
    }
    public function edit($id)
    {
        $student = session()->get('studentList.' . ((int) $id - 1));
        return response()->view('Session/edit', ['student' => $student]);
    }
    public function update(Request $request, $id)
    {
        $id = $request->input('id');
        $name = $request->input('studentname');
        $batch = $request->input('batchname');
        $phone = $request->input('phone');
        $studentEdit = array(
            'Id' => $id,
            'StudentName' => $name,
            'Batch' => $batch,
            'Phone' => $phone,
        );

        session()->put('studentList.' . ((int) $id - 1), $studentEdit);

        return redirect()->route('session.index');

    }

    public function destroy($id)
    {
        session()->forget('studentList.' . ((int) $id - 1));
        return redirect()->route('session.index');
    }
}