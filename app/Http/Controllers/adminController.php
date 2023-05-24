<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use Illuminate\Support\Facades\Session;

class adminController extends Controller
{
    public function indexAdmin()
    {
        if (Auth::check()) { 
            return view('/Admin/adminIndex');
        }
        return redirect()->route('loginAdmin'); 
        
    }

    public function loginAdmin()
    {
        return view('/Admin/loginAdmin');
    }

    public function registerAdmin()
    {
        return view('/Admin/registerAdmin');
    }


    public function store(Request $request)
    {
        $input = $request->all();

        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password'])
        ]);
        return redirect()->route('loginAdmin');
    }

    public function check(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('homeAdmin');
        }
        Session::flash('error','Email hoặc password không đúng');
        return redirect()->back();
    }
}
