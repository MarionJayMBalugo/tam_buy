<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Profile;
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
            $user=Users::where('email',$request['email'])->firstOrFail();
           
            $profile = new Profile(['image' => 'default.jpg']);
            $user->profile()->save($profile);
             return redirect('/login')->with('registered', 'Registered successfully');
        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect('loginForm')->back()->withInput()->withErrors('failed', 'Failed to register');
        }
    }
    
    public function login(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        try {
            $user = Users::where('email', '=', $request['username'])
                ->where('password', '=', $request['password'])
                ->get();
                $userProfile=Users::find($user[0]->id)->profile;
            // if ($user[0]['user_type'] == "user") {
            //     $request->session()->put('user',$user);
            //     return redirect('home')->with('success', 'Successful login');
            // }
            if($user){
                $request->session()->put('user',$user);
                $request->session()->put('userProfilePic',$userProfile);
                if ($user[0]->email == 'admin@admin.com') {
                    return redirect('admin')->with('success', 'Successful login');
                } else {
                    
                     return redirect('home')->with('success', 'Successful login');
                }
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
        return view('landingPage');
    }
}
   