<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
Use image;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;





//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;


class UserController extends Controller
{
    
    public function profil(){
        $user = Auth::user();
$image=DB::table('images')
            ->where('user_id', 1);
            
dd($image);
        //$image= Image::create($request->All());
        return view('profile',compact('user','image'));
    }

    public function update_avatar(Request $request)
    {


        
        $user=new \App\User();
        if($request->has('avatar')){
            $image = $request->file('avatar');
            $filename= time().'.'.$user->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('/uploads/avatars/'.$filename));


            $user= Auth::user();
            $user->avatar=$filename;
            $user->save();
         }
            return view('users.profil',array('user'=>Auth::user()));
       
    }

    

}
