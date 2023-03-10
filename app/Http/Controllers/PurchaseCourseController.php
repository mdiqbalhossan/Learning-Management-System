<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use App\Models\Lesson;
use App\Models\Section;
use Illuminate\Http\Request;

class PurchaseCourseController extends Controller
{
    public function purchase()
    {
        $courses = Enroll::where('user_id', auth()->user()->id)
            ->where('payment_status', 'completed')
            ->where('status', 'accepted')
            ->get();
        return view('user.course', compact('courses'));
    }

    public function learning($slug)
    {
        $c = Course::where('slug', $slug)->first();
        $course = Enroll::where('user_id', auth()->user()->id)->where('payment_status', 'completed')->where('course_id', $c->id)->first();
        $sections = Section::where('course_id', $c->id)->get();
        if ($course) {
            return view('user.learning', compact('course', 'sections'));
        } else {
            return redirect()->route('course.purchase');
        }
    }

    public function lessonDetails(Request $request)
    {
        $lessons = Lesson::where('id', $request->id)->first();
        return response()->json($lessons);
    }
}
