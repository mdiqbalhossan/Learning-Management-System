<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', '!=', null)->get();
        $popularCourses = Course::where('is_popular', '!=', null)->where('status', '!=', null)->get();
        $courses = Course::where('status', '!=', null)->where('status', '!=', 0)->orderBy('id', 'desc')->paginate(12);
        return view('welcome', compact('categories', 'popularCourses', 'courses'));
    }

    public function about()
    {
        $categories = Category::where('status', '!=', null)->get();
        return view('about', compact('categories'));
    }

    public function blog()
    {
        $categories = Category::where('status', '!=', null)->get();
        return view('blog', compact('categories'));
    }

    public function contact()
    {
        $categories = Category::where('status', '!=', null)->get();
        return view('contact', compact('categories'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $courses = Course::where('category_id', $category->id)->where('status', '!=', null)->where('status', '!=', 0)->paginate(6);
        $categories = Category::where('status', '!=', null)->get();
        return view('category', compact('category', 'courses', 'categories'));
    }

    public function course()
    {
        $courses = Course::where('status', '!=', null)->where('status', '!=', 0)->orderBy('id', 'desc')->paginate(6);
        $categories = Category::where('status', '!=', null)->get();
        return view('course', compact('courses', 'categories'));
    }
}
