<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecretaryController extends Controller
{
    public function index()
    {
        return view('dashboards.org.cs.president.cs_index');
    }
    public function profile()
    {
        return view('dashboards.users.profile');
    }
    public function settings()
    {
        return view('dashboards.org.cs.president.cs_settings');
    }
}
