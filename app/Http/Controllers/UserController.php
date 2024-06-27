<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
 
    public function login_action(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');
    
        if (Auth::attempt($credentials, $remember)) {
            return redirect('/');
        } else {
            return redirect()->back()->with('error', 'Email atau password salah')->withInput();
        }
    }
    


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

 
    public function register_proses(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email|max:255',
            'password' => 'required|string|min:8|max:255',
            'nohp' => 'required|string|min:8|max:255',
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['nohp'] = $request->nohp;

        User::create($data);

        return redirect()->route('login');
    }


    public function dashboard_index()
    {
        if (Session::has('remember_token')) {
            $user = User::where('remember_token', Session::get('remember_token'))->first();

            return view('Dashboard.index', [
                'title' => 'Dashboard Admin',
                'user' => $user,
            ]);
        } else {
            return redirect()->route('login_form');
        }
    }

    public function dashboard_logout(Request $request)
    {
        $user = User::where('remember_token', $request->session()->get('remember_token'))->first();
    
        if ($user) {
            $user->update(['remember_token' => null]);
        }
    
        $request->session()->forget('remember_token');
        return redirect()->route('login_form');
    }
    public function showProduct()
    {
        $images = ['/public/assets/images/buang-sampah.jpg', '/public/assets/images/buang-sampah.jpg', '/public/assets/images/buang-sampah.jpg', '/public/assets/images/buang-sampah.jpg'];

        return view('product', compact('images'));
    }
}
