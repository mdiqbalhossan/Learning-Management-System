<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function profile()
    {
        $setting = User::find(auth()->user()->id);
        return view('user.profile', compact('setting'));
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = User::find(auth()->user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        if ($request->hasFile('image')) {

            $image_path = public_path('settings/' . $user->image);
            if (file_exists($image_path)) {
                File::delete($image_path);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('settings'), $imageName);
            $user->profile_photo_path = $imageName;
        }
        $user->update();
        $notification = array(
            'message' => 'Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    public function changePassword()
    {
        return view('user.change_password');
    }

    public function changePasswordUpdate(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashedPassword = auth()->user()->password;
        if (Hash::check($request->old_password, $hashedPassword)) {
            if (!Hash::check($request->password, $hashedPassword)) {
                $user = User::find(auth()->user()->id);
                $user->password = Hash::make($request->password);
                $user->update();
                Auth::guard('web')->logout();
                $notification = array(
                    'message' => 'Password Changed Successfully',
                    'alert-type' => 'success'
                );
                return redirect()->route('login')->with($notification);
            } else {
                $notification = array(
                    'message' => 'New Password Can not be same as old password',
                    'alert-type' => 'error'
                );
                return back()->with($notification);
            }
        } else {
            $notification = array(
                'message' => 'Current Password Not Match',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }
    }
}
