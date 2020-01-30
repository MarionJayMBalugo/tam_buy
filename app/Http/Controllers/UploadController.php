<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Image;
class UploadController extends Controller
{
    public function upload(Request $request){
        $user=session('user');
        $id=$user[0]->id;
        if($request->hasFile('file')){
            $avatar= $request->file('file');
            $filename=time().'.'.$avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('image/avatar/'.$filename));
            $users=Users::find($id)->profile;
            $image= $users->image;
            if($image !="default.jpg"){
                File::delete('image/avatar/'.$image);
            }
            $profile =Profile::where('users_id',$id)->first();
            $profile->image = $filename;
            $profile->save();
            session('userProfilePic')->image=$filename;
            session('userProfilePic')->image;
            return view('user.profile')->with('userData',[session('user'),session('userProfilePic')]);   
		}else{
            return redirect()->back()->with('error','you didn\'t choose any file');
        }
    }
}
