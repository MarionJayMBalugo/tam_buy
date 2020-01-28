<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use DB;

class pageController extends Controller
{
    public function registerForm(){
        return view('register');
    }

    public function loginForm(){
        return view('login');
    }
    public function register(Request $request){

        $request->validate([
            'name' => 
                [
                    'required',
                    'min:5'
                ],
            'username' => 
                [
                    'required',
                    'unique:users,username',
                    'min:5'
                ],
            'email' => 
                [
                    'required',
                    'email',
                    'unique:users,email'
                ],
            'gender' => 
                [
                    'required'
                ], 
            'password' => 
                [
                    'required',
                    'min:8',
                    'confirmed'
                ]
        ]);
        
            $user = new Users([
                'name' => $request['name'],
                'username' => $request['username'],
                'email' => $request['email'],
                'gender' => $request['gender'],
                'user_type' => 'user',
                'password' => $request['password']
            ]);
            DB::beginTransaction();
            try {
    
            $user->save();
            DB::commit();
            return redirect('login')->with('registered', 'Registered successfully');
        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withInput()->withErrors('failed', 'Failed to register');
        }
    }
    
    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        try {
            $user = Users::where('username', '=', $request['username'])
                ->where('password', '=', $request['password'])
                ->get(['user_type']);

            if ($user[0]['user_type'] == "user") {
                return redirect('home')->with('success', 'Successful login');
            }
            else if ($user[0]['user_type'] == 'admin') {
                    return redirect('admin')->with('success', 'Successful login');
            } else {
                return redirect()->back()->withInput()->withErrors('failed', 'Failed to login');
            }
        }
        catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors('failed', 'Failed to login');
        }
        // return redirect('home');
    }

    public function home(){
        return view('home');
    }
}
