<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Party;

class PartyController extends Controller
{
    public function createParty () {
      return view ('create_party');
    }
}
