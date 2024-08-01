<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{

    public function loginIndex()
    {
        return view('Auth.login', ['title' => 'Login']);
    }

    public function registerIndex()
    {
        return view('Auth.register', ['title' => 'Register']);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            $user = Auth::user();

            if ($user->role_as === 1) {
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('home.index');
            }
        }
        return redirect()->route('login')->with('error', 'login failed please check your credentials');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            user_detail::create([
                'user_id' => $user->id,
                'phone' => '',
                'address' => '',
            ]);
            return redirect()->route('login')->with('success', 'User created successfully');
        } catch (\Throwable $th) {
            Log::info($th);
            return redirect()->back()->with('error', 'User creation failed');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
