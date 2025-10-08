<?php

namespace App\Http\Controllers;

use App\Models\Developer;
use Illuminate\Http\Request;

class DevelopersController extends Controller
{
    public function index() {

        $devs = Developer::orderBy('created_at', 'desc')->paginate(5);

        return view('developers.index', ['developers' => $devs]);
    }

    public function show($id) {
        // route --> /developers/{id}
        // fetch a single record by id and pass to view
        $data = Developer::findOrFail($id);

        return view('developers.show', ['developer' => $data]);
    }

    public function delete($id) {

        $developer = Developer::findOrFail($id);
        $developer->delete();

        // return redirect('developers.index');
        return redirect()->route('developers.index');
    }

    public function create() {

        $developer = Developer::create([
            'name'=> 'anass',
            'age'=> 26,
            'email'=> 'anassa@gmail.com',
            'stack'=> 'Fullstack',
        ]);

        return redirect()->route('developers.index');
    }

    public function update($id) {

        $dev = Developer::findOrFail($id);

        $dev->update([
            'name'=> 'Adil',
            'age'=> 20,
            'email'=> 'adil201@gmail.com',
            'stack'=> 'Fullstack',
        ]);

        return redirect()->route('developers.index');
    }
}
