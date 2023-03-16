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

    public function edit($id)
    {
        $enroll_courses = Enroll::find($id);
        return view('admin.purchase.edit', compact('enroll_courses'));
    }

    public function update(Request $request, $id)
    {
        $enroll_courses = Enroll::find($id);
        $enroll_courses->status = $request->status;
        $enroll_courses->save();
        $notification = array(
            'message' => 'Course status update successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('purchase.course')->with($notification);
    }
}
