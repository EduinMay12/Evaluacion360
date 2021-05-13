<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\PasswordRequest;
use App\Models\User;
use Auth;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage =10;

        if (!empty($keyword)) {
            $user = User::where('name', 'LIKE', "%$keyword%")
                ->orWhere('email', 'LIKE', "%$keyword%")
                ->orWhere('puesto', 'LIKE', "%$keyword%")
                ->orWhere('tipo', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $user = User::latest()->paginate($perPage);
        }

        return view('profile.index', compact('user'));
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        
        User::create($requestData);

        return redirect('profile')->with('flash_message', 'user added!');
    }

 
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('profile.show', compact('user'));
    }

    public function create()
    {
        return view('profile.create');
    }
  
    public function edit()
    {
        return view('profile.edit');
    }

  
    public function update(ProfileRequest $request)
    {
        auth()->user()->update($request->all());

        return back()->withStatus(__('Perfil actualizado :D'));
    }

 
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Contraseña actualizado'));
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
        return view('profile.edit' );
    }


    public function destroy($id)
    {
        User::destroy($id);

        return redirect('profile')->with('flash_message', 'Persona Eliminado!');
    }
}
