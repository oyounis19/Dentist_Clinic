<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Models\Doctor;
use App\Models\User;
use Carbon\Carbon;

class UserController extends Controller
{
    public function login(LoginRequest $request){
        $credentials = $request->only('email', 'password');
        // Attempt to log the user in
        if(Auth::attempt($credentials, $request->has('rmbr')))
        {
            return redirect()->intended(route('home'));
        }

        // If unsuccessful, redirect back to the login with the from data
        return redirect()->back()->withInput($request->only('email'))->with('error', 'Wrong email or password, Try again!');
    }

    public function register(RegisterRequest $request){
        // Create a new user with the validated data
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        // Redirect the user
        return redirect()->route('home');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }

    public function showcontactPage(){
        return view('contact', [
            'doctors' => Doctor::all(['id', 'name', 'created_at']),
            'monthLater' => Carbon::now()->addMonth()->toDateString(),
        ]);
    }

    public function showhomePage(){
        return view('home', [
            'doctors' => Doctor::all(),
            'monthLater' => Carbon::now()->addMonth()->toDateString(),
        ]);
    }

    public function showAboutUsPage(){
        return view('about', [
            'doctors' => Doctor::all(),
        ]);
    }
}
