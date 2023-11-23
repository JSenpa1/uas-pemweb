<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AccountController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;
            
            if($usertype == 'admin')
            {
                return view('admin.adminPage');
            }

            if($usertype == 'user')
            {
                return view('dashboard');
            }

            else 
            {
                return redirect()->back();
            }
        }
    }
}
