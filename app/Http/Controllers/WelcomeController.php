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
        $courses = Course::where('status', '!=', null)->where('status', '!=', 0)->get();
        return view('welcome', compact('categories', 'popularCourses', 'courses'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $courses = Course::where('category_id', $category->id)->where('status', '!=', null)->where('status', '!=', 0)->paginate(6);
        $categories = Category::all();
        return view('category', compact('category', 'courses', 'categories'));
    }

    public function course()
    {
        $courses = Course::where('status', '!=', null)->where('status', '!=', 0)->paginate(6);
        $categories = Category::all();
        return view('course', compact('courses', 'categories'));
    }
}
