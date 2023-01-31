<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $popularCourses = Course::where('is_popular', '!=', null)->where('status', '!=', null)->get();
        $courses = Course::where('status', '!=', null)->orWhere('status', 1)->get();
        return view('welcome', compact('categories', 'popularCourses', 'courses'));
    }
}
