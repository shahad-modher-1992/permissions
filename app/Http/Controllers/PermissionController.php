<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:super_admin');
    }
    public function index() {

        // dd(Auth::user())
        return view('userindex');

    }
}
