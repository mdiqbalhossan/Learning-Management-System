<?php

use App\Models\Setting;


function setting($key)
{
    $setting = Setting::first();
    return $setting->$key;
}
