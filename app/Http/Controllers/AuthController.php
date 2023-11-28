<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function register()
    {
        return view('auth.register');
    }
    public function postRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $this->user->create($request->all());
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('register')->with('status', 'Something went wrong');
        }
        DB::commit();
        return redirect()->route('login')->with('status', 'Registration completed');
    }


    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required',
            'password'  => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('status', 'Successfully logged in');
        } else {
            return redirect()->route('login')->with('status', 'The provided credentials do not match our records.')->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
