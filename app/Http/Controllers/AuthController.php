<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Session;
use App\Models\Student;

class AuthController extends Controller
{
    public $check;
    public $user;


    public function login()
    {

        return view('login.login');
    }

    public function register(){

        return view('login.register');
    }

    public function newLogin(Request $request)
    {
        if ($request->check == 1) {
            $this->user = Teacher::where('email', $request->email)->where('status', 1)->first();
            if ($this->user) {
                if (password_verify($request->password, $this->user->password)) {
                    Session::put('user_id', $this->user->id);
                    Session::put('user_name', $this->user->name);
                    Session::put('user_image', $this->user->image);

                    return redirect('/teacher-dashboard');
                } else {
                    return redirect()->back()->with('message', 'password is invalid');
                }
            }
            else
            {
                return redirect()->back()->with('message', 'email address is invalid or status is inactive');
            }
        }
        else {
            $this->user = Student::where('email', $request->email)->where('status', 1)->first();
            if ($this->user) {
                if (password_verify($request->password, $this->user->password)) {
                    Session::put('student_id', $this->user->id);
                    Session::put('student_name', $this->user->name);


                    return redirect('/student-dashboard');
                }
                else {
                    return redirect()->back()->with('message', 'password is invalid');
                }
            }
            else
            {
                return redirect()->back()->with('message', 'email address is invalid or status is inactive');
            }
        }

    }

    public function logout()
    {
        Session::forget('user_id');
        Session::forget('user_name');
        Session::forget('user_image');
        return redirect('/');
    }

    public function studentLogout(Request $request)
    {
        Session::forget('student_id');
        Session::forget('student_name');

        return redirect('/');
    }
}
