<?php

namespace App\Http\Controllers;
use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show($id) {
        $movie = Movie::findOrFail($id);
        return view('movies.show',compact('movie'));
    }
}
