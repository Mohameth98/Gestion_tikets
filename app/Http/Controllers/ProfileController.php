<?php

namespace App\Http\Controllers;
use App\Models\Agent_bord;
use Illuminate\Http\Request;

class ProfileController extends Controller {
    public $Agent ;
    public function Monprofile() {
          $Agent = Agent_bord::all();

        return view('profile' ,  compact('Agent'));
    }
}

