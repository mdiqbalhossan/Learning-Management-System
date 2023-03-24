<?php

use App\Models\Category;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\Setting;
use App\Models\User;

function setting($key)
{
    $setting = Setting::first();
    return $setting->$key;
}

function settingSlider($key)
{
    $setting = Setting::first();
    $setting->slider = json_decode($setting->slider);
    return $setting->slider->$key;
}

function settingSocial($key)
{
    $setting = Setting::first();
    $setting->social_link = json_decode($setting->social_link);
    return $setting->social_link->$key;
}

function getLesson($section_id, $course_id)
{
    $lessons = \App\Models\Lesson::where('section_id', $section_id)->where('course_id', $course_id)->get();
    return $lessons;
}

// total section
function totalSection($course_id)
{
    $total = \App\Models\Section::where('course_id', $course_id)->count();
    return $total;
}

// total lesson
function totalLesson($course_id)
{
    $total = \App\Models\Lesson::where('course_id', $course_id)->count();
    return $total;
}

// total student
function totalStudent($course_id)
{
    $total = \App\Models\Enroll::where('course_id', $course_id)->count();
    return $total;
}

//getAdmin
function getAdmin()
{
    $admin = \App\Models\Admin::first();
    return $admin;
}

function totalCount($type)
{
    $student = User::count();
    $course = Course::where('status', '!=', null)->count();

    if ($type == 'student') return $student;
    else if ($type == 'course') return $course;
}

function footer_categories()
{
    $categories = Category::where('status', '!=', null)->limit(4)->get();
    return $categories;
}
