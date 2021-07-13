<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsignRoleController extends Controller
{
    public function index()
    {
        
        return view('admin.users.index');
    }

}
