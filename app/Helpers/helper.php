<?php

use App\Models\Setting;


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

function setEnvironmentValue($envKey, $envValue)
{
    $envFile = app()->environmentFilePath();
    $str = file_get_contents($envFile);

    $oldValue = strtok($str, "{$envKey}=");

    $str = str_replace("{$envKey}={$oldValue}", "{$envKey}={$envValue}\n", $str);

    $fp = fopen($envFile, 'w');
    fwrite($fp, $str);
    fclose($fp);
}
