<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Party;

class UserController extends Controller
{
    public function register () {
      $parties = Party::all();
      return view ('users.register')->with('parties', $parties);
    }
}
