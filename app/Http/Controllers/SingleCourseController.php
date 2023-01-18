<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class SingleCourseController extends Controller
{
    public function index($slug)
    {
        $course = Course::where('slug', $slug)->first();
        $categories = Category::where('status', '!=', null)->get();
        return view('single', compact('course', 'categories'));
    }
}
