<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Party;

class PartyController extends Controller
{
    public function createParty () {
      return view ('create_party');
    }

    public function newParty (Request $request) {
      $party = new Party([
        'name' => $request->input('party_name'),
        'city' => $request->input('city')
      ]);
      $party->save();

      return redirect()->route('welcome');
    }
}
