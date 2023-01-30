<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::all();
        return view('admin.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create');
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
            'email' => 'required|email|unique:users',
            'phone' => 'unique:users',
            'password' => 'required|confirmed',
            'profile_photo_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $profile_photo_path = "";
        if ($request->hasFile('profile_photo_path')) {
            $image = $request->file('profile_photo_path');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/student');
            $image->move($destinationPath, $name);
            $profile_photo_path = $name;
        }

        $student = new User();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->profile_photo_path = $profile_photo_path;
        $student->password = bcrypt($request->password);
        $student->save();


        $notification = array(
            'message' => 'Student created successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('student.index')->with($notification);
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
    public function edit($id)
    {
        $student = User::find($id);
        return view('admin.student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'unique:users,phone,' . $id,
            'password' => 'confirmed',
            'profile_photo_path' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);



        $student = User::find($id);
        $profile_photo_path = "";

        if ($request->hasFile('profile_photo_path')) {

            $destination = public_path('/uploads/student/' . $student->profile_photo_path);
            if (file_exists($destination)) {
                @unlink($destination);
            }
            $image = $request->file('profile_photo_path');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/student');
            $image->move($destinationPath, $name);
            $profile_photo_path = $name;
        }


        $student->name = $request->name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->address = $request->address;
        $student->profile_photo_path = $profile_photo_path;
        $student->password = bcrypt($request->password);
        $student->save();

        $notification = array(
            'message' => 'Student Updated successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('student.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = User::find($id);
        $student->delete();
        $notification = array(
            'message' => 'Student Deleted successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('student.index')->with($notification);
    }
}
