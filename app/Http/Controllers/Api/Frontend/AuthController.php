<?php

namespace App\Http\Controllers\Api\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'email' =>'required|string|unique:users|max:255',
            'password'=>'required_with:password_confirmation|same:password_confirmation|min:8',
            'password_confirmation'=>'min:8'
        ]);
        $user=new User([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password)
        ]);
        $user->save();
        return response()->json(['message'=>'succes register']);
    }

    public function authenticate(Request $request){
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)){
            $user = $request->user();
            $token = $user->createToken('api-token')->plainTextToken;

            $cookie = Cookie::make('jwt', $token, 1440*14);
            return response(['user' => $user, 'token' => $token])->cookie($cookie);

        }
        return response()->json(['message'=>'Invalid credentails'],401);
    }
    public function logout(Request $request){
            $request->user()->tokens()->delete();
            $cookie = cookie('jwt', null, -1);
            return response()->json(['message'=>'success logout'],200)->withCookie($cookie);
    }
    public function test(Request $request){
        return Cookie::get('test85');
    }
}
