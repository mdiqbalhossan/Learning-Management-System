<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function profile()
    {
        $setting = Admin::find(auth()->user()->id);
        return view('admin.profile', compact('setting'));
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $admin = Admin::find(auth()->user()->id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->address = $request->address;
        $admin->mobile = $request->phone;
        $admin->about = $request->about_me;
        if ($request->hasFile('image')) {

            $image_path = public_path('settings/' . $admin->image);
            if (file_exists($image_path)) {
                File::delete($image_path);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('settings'), $imageName);
            $admin->image = $imageName;
        }
        $admin->update();
        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }



    public function changePassword()
    {
        return view('admin.change_password');
    }

    public function changePasswordUpdate(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashedPassword = auth()->user()->password;
        if (password_verify($request->old_password, $hashedPassword)) {
            if (!password_verify($request->password, $hashedPassword)) {
                $admin = Admin::find(auth()->user()->id);
                $admin->password = bcrypt($request->password);
                $admin->update();
                $notification = array(
                    'message' => 'Password Changed Successfully',
                    'alert-type' => 'success'
                );
                return back()->with($notification);
            } else {
                $notification = array(
                    'message' => 'New Password Can not be same as old password',
                    'alert-type' => 'error'
                );
                return back()->with($notification);
            }
        } else {
            $notification = array(
                'message' => 'Current Password not match',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }
}
