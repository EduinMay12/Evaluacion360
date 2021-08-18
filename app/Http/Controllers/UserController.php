<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Auth;
use Image;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
        /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        return view('user.edit');
    }

        
    public function update_avatar(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('./uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('home' );
    }
}
