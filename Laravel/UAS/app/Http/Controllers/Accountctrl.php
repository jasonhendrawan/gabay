<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class Accountctrl extends Controller
{
    public function register(){
        return view('register');
    }

    public function login(){
        return view('login');
    }

    public function logout(request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->invalidate();

        return redirect('/');
    }
    
    public function store(Request $request)
    {
        $fields = $request->validate([
            'first_name' => 'required|regex:/^[a-zA-Z0-9\s]+$/|max:25',
            'last_name' => 'required|regex:/^[a-zA-Z0-9\s]+$/|max:25',
            'email' => 'required|email',
            'role' => 'required|in:1,2',
            'gender' => 'required|in:1,2',
            'display_picture_link' => 'required|image|mimes:jpeg,jpg,png',
            'pass' => 'required|min:8|regex:/[0-9]/',
            'confirm_pass' => 'required|min:8|same:pass'
        ]);

        $rawImage = $request->file('display_picture_link');
        $extension = $rawImage->getClientOriginalExtension();
        
        $formatName = 'image/profile/'.$fields['display_picture_link'].'.'.$extension;

        $rawImage->move('image/profile/', $formatName);

        $userData = [
            'first_name' => $fields['first_name'],
            'last_name' => $fields['last_name'],
            'email' => $fields['email'],
            'display_picture_link' => $formatName,
            'password' => $fields['pass'],
            'role_id' => $fields['role'],
            'gender_id' => $fields['gender'],
        ];

        $register = Account::create($userData);

        auth()->login($register);
        return redirect('/')->with('message');

    }

    public function validating(Request $request){
        $fields = $request->validate([
            'email' => 'required',
            'pass' => 'required',
            
        ]);

        $userData = [
            'email' => $fields['email'],
            'password' => $fields['pass']
        ];

        if (auth()->attempt($userData)) {
            $request->session()->regenerate();
            

            return redirect('/home');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
