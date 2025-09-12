<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use Illuminate\Http\Request;

class DevelopersController extends Controller
{
    public function index() {

        $devs = Developer::orderBy('created_at', 'desc')->paginate(10);

        return view('developers.index', ['developers' => $devs]);
    }
}
