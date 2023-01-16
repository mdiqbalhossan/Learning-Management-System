<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File as FacadesFile;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('id', 'desc')->get();
        return view('admin.course.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.course.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'image' => 'mimes:png,jpg,jpeg',
        ]);

        $filename = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/course/', $filename);
        }
        Course::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'category_id' => $request->category_id,
            'level' => $request->level,
            'details' => $request->details,
            'short_description' => $request->short_details,
            'is_popular' => $request->is_popular,
            'source' => $request->source,
            'source_url' => $request->source_url,
            'is_free' => $request->is_free,
            'current_price' => $request->current_price,
            'default_price' => $request->default_price,
            'image' => $filename,
            'status' => $request->status,
        ]);
        $notification = array(
            'message' => 'Course created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('course.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        $categories = Category::all();
        return view('admin.course.edit', compact('course', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'image' => 'mimes:png,jpg,jpeg',
        ]);

        $filename = '';
        if ($request->hasFile('image')) {
            $destination = 'uploads/course/' . $course->image;
            if (FacadesFile::exists($destination)) {
                FacadesFile::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/course/', $filename);
        }
        $course->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'category_id' => $request->category_id,
            'level' => $request->level,
            'details' => $request->details,
            'short_description' => $request->short_details,
            'is_popular' => $request->is_popular,
            'source' => $request->source,
            'source_url' => $request->source_url,
            'is_free' => $request->is_free,
            'current_price' => $request->current_price,
            'default_price' => $request->default_price,
            'image' => $filename,
            'status' => $request->status,
        ]);
        $notification = array(
            'message' => 'Course Updated successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('course.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $destination = 'uploads/category/' . $course->image;
        if (FacadesFile::exists($destination)) {
            FacadesFile::delete($destination);
        }
        $course->delete();
        $notification = array(
            'message' => 'Course Deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
