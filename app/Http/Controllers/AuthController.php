<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(AuthRequest $request) {

        $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'email' => ['The provided credentials are incorrect.'],
        ]);
    }

    return response()->json(['token' =>  $user->createToken('token')->plainTextToken]);


    }



    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'confirmed'],
            'role_id' => ['required']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id
        ]);
        return response()->json(['token' =>  $user->createToken('token')->plainTextToken]);
    }


    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
    }

    public function getuser($id)
    {
        $user = User::all()->find($id);

        return $user;
    }
}
