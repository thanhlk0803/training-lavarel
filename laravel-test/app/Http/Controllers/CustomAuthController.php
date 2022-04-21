<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
class CustomAuthController extends Controller
{
        public function index()
        {
                return view('auth.login');
        }

        public function customLogin(Request $request)
              
        {
                $email = $request->get('email');
                $data = $request->all();
                $request->validate([
                        'email' => 'required',
                        'password' => 'required',
                ]);

                $credentials = $request->only('email', 'password');
                if (Auth::attempt($credentials)) {
                        return redirect()->intended('dashboard')
                                ->withSuccess('Signed in');
                }
                return redirect("login")->withSuccess('Login details are not valid');
        }

        public function registration()
        {
                return view('auth.registration');
        }

        public function customRegistration(Request $request)
        {
                $request->validate([
                        'name' => 'required',
                        'email' => 'required|email|unique:users',
                        'password' => 'required|min:6',
                        'phone' => 'required',
                        'Fname' => 'required',
                        'Lname' => 'required',

                ]);

                $data = $request->all();
                $check = $this->create($data);

                return redirect("dashboard")->withSuccess('You have signed-in');
        }

        public function create(array $data)
        {
                return User::create([
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'password' => Hash::make($data['password']),
                        'phone' => $data['phone'],
                        'Fname' => $data['Fname'],
                        'Lname' => $data['Lname'],
                ]);
        }

        public function dashboard()
        {
                if (Auth::check()) {
                        return view('auth.user');
                }

                return redirect("login")->withSuccess('You are not allowed to access');
        }

        public function signOut()
        {
                Session::flush();
                Auth::logout();

                return Redirect('login');
        }
        public function user(){
        }
        public function userInfor(){
                
        }
}
