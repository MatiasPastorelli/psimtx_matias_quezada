<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PlataformaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function viewHome()
    {
      return view('home');
    }

    public function logout(Request $request) {
      Auth::logout();
      return redirect('/login');
    }
}
