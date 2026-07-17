<?php

namespace App\Http\Controllers;

class ProjectController extends Controller
{
    

    public function Calculator()
    {
        return view('project2.calculator');
    }

    public function reviewRating()
    {
        return view('project3.review-rating');
    }
}
