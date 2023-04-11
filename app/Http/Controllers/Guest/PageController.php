<?php

namespace App\Http\Controllers\Guest;

use App\Models\Movie;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $movies = Movie::all(); //SELECT * from movies

        $data = [
            'movies' => $movies
        ];

        return view('welcome', $data);
}
}
