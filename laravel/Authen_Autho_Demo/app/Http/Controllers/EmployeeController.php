<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class EmployeeController extends Controller
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
        if (Auth::user()->rolename == 'admin') {
            $employees = User::all();
            return response()->view('auth/listEmployee', ['employees' => $employees]);
        } else {
            Auth::logout();
            return response()->view('welcome');
        }

    }

    public function create()
    {
        if (Auth::user()->rolename == 'admin') {
            return response()->view('auth.register');
        } else {
            Auth::logout();
            return response()->view('welcome');
        }
    }

    public function store(Request $request)
    {

        if (Auth::user()->rolename == 'admin') {
            $validate = Validator::make(
                $request->all(),
                [
                    'name' => 'required|Regex:/^[\D]+$/i|max:50',
                    'email' => 'required|email|unique:users,email',
                    'password' => ['required', 'confirmed',
                        Password::min(8)
                        // ->mixedCase()
                            ->letters()
                            ->numbers(),
                        // ->symbols(),
                    ],
                    'phone' => 'required|min:10',
                    'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'address' => 'required',
                    'rolename' => 'required',
                ],
                [
                    'required' => ':attribute do not leave blank',
                    'min' => ':attribute should be not less than :min',
                    'max' => ':attribute should be not more than :max',
                    'confirmed' => ':attribute does not match',
                    'email' => 'The :attribute must be a valid email address',
                    'unique' => ':attribute exists',
                ]
            );

            if ($validate->fails()) {
                return redirect()->route('employee.create')->withErrors($validate);
            }

            $employee = new User;
            $employee->name = $request->input('name');
            $employee->email = $request->input('email');
            $employee->password = Hash::make($request->input('password'));
            $employee->phone = $request->input('phone');
            if ($request->hasFile('image')) {
                $file = $request->file('avatar');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('images/product/', $filename);
                $employee->image = $filename;

            }

            $employee->address = $request->input('address');
            $employee->rolename = $request->input('rolename');
            $employee->save();

            return redirect()->route('home')->with('success', 'Your account created successfully');

        } else {
            Auth::logout();
            return response()->view('welcome');
        }

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
            $employee = User::find((int) $id);
            return response()->view('auth/edit', ['employee' => $employee]);

        } else {
            Auth::logout();
            return response()->view('welcome');
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
            $employee = User::where('Id', '=', (int) $id)->get()->first();
            $validate = Validator::make(
                $request->all(),
                [
                    'name' => 'Regex:/^[\D]+$/i|max:50',

                    'phone' => ' min:10',
                    'avatar' => ' image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    'address' => ' ',
                ],
                [
                    'min' => ':attribute should be not less than :min',
                    'max' => ':attribute should be not more than :max',
                    'confirmed' => ':attribute does not match',
                    'unique' => ':attribute exists',
                ]
            );

            if ($validate->fails()) {
                return redirect()->route('employee.edit', $employee->id)->withErrors($validate);
            } else {
                $employee = User::find($id);
                if($request->has('avatar')){

                    $file = $request->file('avatar');
                    $extension = $file->getClientOriginalExtension();
                    $filename = time() . '.' . $extension;
                    $file->move('images/avatar/', $filename);
                } else {
                    $filename = $employee->avatar;
                }

                User::where('id','=',(int)$id)->update([

                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'avatar' => $filename,
                    'address' => $request->input('address'),
                    'rolename' => $request->input('rolename'),

                ]);
                return redirect()->route('employee')->with('updated', 'Your info employee updated ');

            }

        } else {
            Auth::logout();
            return response()->view('welcome');
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
            User::where('Id', '=', (int) $id)->delete();
            return redirect()->action([EmployeeController::class, 'index']);
        } else {
            Auth::logout();
            return response()->view('welcome');
        }

    }

}
