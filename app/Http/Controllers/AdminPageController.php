<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    public function menu()
    {
        return view("admin.adminPageMenu");
    }
}
