<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use Illuminate\Http\Request;

class PoksController extends Controller
{
    public function index() {

        $devs = Developer::orderBy('created_at', 'desc')->paginate(10);
        // $devs = Developer::all();

        return view('warriors.index', ["warriors" => $devs]);   
    }
}
