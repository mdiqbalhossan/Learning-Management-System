<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Section;
use Illuminate\Http\Request;

class SingleCourseController extends Controller
{
    public function index($slug)
    {
        $course = Course::where('slug', $slug)->first();
        $categories = Category::where('status', '!=', null)->get();
        $popular_courses = Course::where('status', '!=', null)
            ->where('status', '!=', 0)
            ->where('is_popular', '!=', null)
            ->orderBy('id', 'desc')
            ->limit(3)
            ->get();

        $sections = Section::where('course_id', $course->id)->get();
        return view('single', compact('course', 'categories', 'popular_courses', 'sections'));
    }
}
