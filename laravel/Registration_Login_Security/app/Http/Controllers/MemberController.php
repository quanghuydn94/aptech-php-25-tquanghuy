<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all();
        return response()->view('Register/index', ['members' => $members]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('Register/register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make(
            $request->all(),
            [
                'fullname' => 'required|Regex:/^[\D]+$/i|max:50',
                'username' => 'required|min:6|max:20|unique:users,UserName',
                'password' => ['required', 'confirmed',
                    Password::min(8)
                    // ->mixedCase()
                        ->letters()
                        ->numbers(),
                    // ->symbols(),
                ],
                'email' => 'required|email|unique:users,Email',
                'birthday' => 'required|date_format:"d/m/Y"',
                'address' => 'required',
            ],
            [
                'required' => ':attribute do not leave blank',
                'min' => ':attribute should be not less than :min',
                'max' => ':attribute should be not more than :max',
                'confirmed' => ':attribute does not match',
                'date' => 'The :attribute is not a valid date.',
                'email' => 'The :attribute must be a valid email address',
                'unique' => ':attribute exists',
            ]
        );

        if ($validate->fails()) {
            return redirect()->route('member.create')->withErrors($validate);
        }

        $member = new Member;
        $member->FullName = $request->input('fullname');
        $member->Username = $request->input('username');
        $member->password = Hash::make($request->input('password'));
        $member->Email = $request->input('email');
        $member->Birthday = $request->input('birthday');
        $member->Address = $request->input('address');
        $member->Active = 0;
        $member->Vkey = md5(time());
        $member->save();

        if (isset($member)) {
            $to = $request->input('email');
            $subject = "Email Verification";
            $message = "<a href='{{route('member.active)}}'></a>code to activate your account : $member->Vkey";
            $headers = "From: quanghuytrandn568@gmail.com";
            mail($to, $subject, $message, $headers);
        }
        return redirect()->route('member.create')->with('success', 'Your account created. Check your mail to activate your account');

    }

    public function active()
    {
        return view('Register/active');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::find((int) $id);
        return response()->view('Register/edit', ['member' => $member]);
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
        $member = Member::where('Id', '=', (int) $id)->get()->first();
        $validate = Validator::make(
            $request->all(),
            [
                'fullname' => 'required|Regex:/^[\D]+$/i|max:50',
                'password' => ['required', 'confirmed',
                    Password::min(8)
                    // ->mixedCase()
                        ->letters()
                        ->numbers(),
                    // ->symbols(),
                ],
                'birthday' => 'required|date_format:"d/m/Y"',
                'address' => 'required',
            ],
            [
                'required' => ':attribute do not leave blank',
                'min' => ':attribute should be not less than :min',
                'max' => ':attribute should be not more than :max',
                'date' => 'The :attribute is not a valid date.',
                'confirmed' => ':attribute does not match',
                'unique' => ':attribute exists',
            ]
        );

        if ($validate->fails()) {
            return redirect()->route('member.edit', $member->Id)->withErrors($validate);
        } else {
            $member = Member::where('Id', '=', (int) $id);
            $member->update([
                'FullName' => $request->input('fullname'),
                'Password' => Hash::make($request->input('email')),
                'Birthday' => $request->input('birthday'),
                'Address' => $request->input('address'),
            ]);
            return redirect()->route('member.index');
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
        Member::where('Id', '=', (int) $id)->delete();
        return redirect()->action([MemberController::class, 'index']);
    }
}