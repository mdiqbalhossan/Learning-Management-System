<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.category.index', compact('categories'));
        // dd($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
        ]);
        $filename = '';
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/category/', $filename);
        }
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $filename,
            'status' => $request->status,
        ]);
        $notification = array(
            'message' => 'Category created successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('category.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        // return view('admin.category.edit', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $filename = $category->image;
        if ($request->hasFile('image')) {

            $destination = 'uploads/category/' . $category->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/category/', $filename);
        }
        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $filename,
            'status' => $request->status,
        ]);
        $notification = array(
            'message' => 'Category updated successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('category.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $destination = 'uploads/category/' . $category->image;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $category->delete();
        $notification = array(
            'message' => 'Category Deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
