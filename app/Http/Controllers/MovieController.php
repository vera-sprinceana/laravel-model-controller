<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index(){
        
        
        $movies= Movie::all();
        //dump($movies);
        return view('pages.index', compact('movies'));
    }
    public function show($id) {
        $movie= Movie::findOrFail($id);
        //dump($movies);
        return view('pages.show', compact('movie'));
    }
}
