<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Enroll;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        $enroll_courses = Enroll::with('course', 'user')->get();
        return view('admin.purchase.index', compact('enroll_courses'));
    }
}
