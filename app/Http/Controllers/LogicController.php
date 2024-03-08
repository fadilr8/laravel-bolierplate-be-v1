<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class LogicController extends Controller
{
    public function index() {
        $team = Team::find(1);
        
        return view('welcome')->with(compact('team'));
    }
}
