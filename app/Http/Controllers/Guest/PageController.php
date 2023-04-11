<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $movies = Movie::all()->get(); //SELECT * from movies

        $data = [
            'movies' => $movies
        ];

        return view('welcome', $data);
}
}
