<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function postLogin(Request $request)
    {
        \request()->validate([
            'uname' => 'required',
            'pwd' => 'required',
        ]);

        if (Auth::guard('admin')->attempt(['username' => $request->uname, 'password' => $request->pwd])) {
            $admin = Admin::where('username', $request->uname)->first();
            // return \redirect('super-dashboard'); //redirect to url link dashboard
            echo "sukses";
        } else {
            return \redirect('/super')->with(['success' => 'Email or password is incorrect']);
        }
    }
}
