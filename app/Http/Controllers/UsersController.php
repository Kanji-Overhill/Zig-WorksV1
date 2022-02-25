<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UsersController extends Controller
{
     public function activate(Request $request)
    {
        if ($request->id != null) {
           $user_update = User::find($request->id);
           $user_update->active = $request->active;
           $user_update->save();
        }
        
        $users = User::where('type', '!=', 'super-admin')->get();
        return view('admin-users',['users'=>$users]);
    }
    public function getUsers(Request $request)
    {
        if (isset($request->id)) {
           $user_delete = User::find($request->id);
           $user_delete->delete();
        }

        $users = User::where('type', '!=', 'super-admin')->get();
        return view('admin-users',['users'=>$users]);
    }


    public function insert(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
