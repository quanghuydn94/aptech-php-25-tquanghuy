<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function index()
    {
        $batches = Batch::all();
        return view('Batch/index')->with('batches', $batches);
    }

    public function create()
    {
        return view('Batch/create');
    }

    public function store()
    {
        $batchname = $_POST['batchname'];
        $batch = new Batch;
        $batch->BatchName = $batchname;
        $batch->save();
        $batches = Batch::all();
        return view('Batch/index')->with('batches', $batches);
    }

    public function edit($id)
    {
        $batches = Batch::find($id);
        return view('Batch/edit')->with('batches', $batches);
    }
    public function update($id)
    {
        $batch = Batch::where('id',$id);
        $batch->update(['BatchName'=>$_POST['batchname']]);
        $batches = Batch::all();
        return view('Batch/index')->with('batches', $batches);
    }
    public function destroy($id)
    {
        Batch::where('id',$id)->delete();
        $batches = Batch::all();
        return view('Batch/index')->with('batches', $batches);
    }
}
