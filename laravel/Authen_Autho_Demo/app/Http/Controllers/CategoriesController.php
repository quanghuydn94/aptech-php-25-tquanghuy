<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->rolename == 'admin' || Auth::user()->rolename == 'employee' ) {
            $categories = Categories::all();
            return response()->view('Category.index', ['categories' => $categories]);

        } else {
            Auth::logout();
            return response()->view('admin');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->rolename == 'admin') {
            $users = User::all();
            return response()->view('Category.add', ['users' => $users]);

        } else {
            Auth::logout();
            return response()->view('admin');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::user()->rolename == 'admin') {
            $category = new Categories;
            $category->name = $request->input('name');
            $category->description = $request->input('description');
            $category->userid = $request->input('userid');
            $category->save();
            return redirect()->route('category');

        } else {
            Auth::logout();
            return response()->view('admin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::user()->rolename == 'admin') {
            $users = User::all();
            $category = Categories::find($id);
            return response()->view('Category.edit',
            ['category' => $category,
                'users'=>$users,
            ]);

        } else {
            Auth::logout();
            return response()->view('admin');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (Auth::user()->rolename == 'admin') {
            $category = Categories::where('Id', '=', (int) $id);
            $category->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'userid' => $request->input('userid'),
            ]);
            return redirect()->route('category');

        } else {
            Auth::logout();
            return response()->view('admin');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Auth::user()->rolename == 'admin') {
            Categories::where('Id', '=', (int) $id)->delete();
            return redirect()->action([StudentController::class, 'index']);

        } else {
            Auth::logout();
            return response()->view('admin');
        }
    }
}
