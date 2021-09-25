<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $req)
    {
        $userName = $req->input('username');
        $password = $req->input('password');
        $member = Member::where('UserName', $userName)->where('Active', 1)->get()->first();
        if ($member) {
            if (Hash::check($password, $member->Password)) {
                return redirect()->route('member.index');
            } else {
                return redirect('/')->with('msg', 'Username or Password does not match!');
            }
        } else {
            return redirect('/')->with('msg', 'Your account do not activate');
        }
    }

}