<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManagement extends Controller
{
  public function index()
  {
    return view('content.user.user');
  }
}
