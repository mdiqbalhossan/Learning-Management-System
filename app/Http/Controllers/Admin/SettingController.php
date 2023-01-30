<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
    public function main()
    {
        $setting = Setting::first();
        return view('admin.setting.main', compact('setting'));
    }

    public function mainUpdate(Request $request)
    {
        $setting = Setting::first();
        if ($request->hasFile('logo')) {
            $destination = public_path('settings/' . $setting->logo);
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $logo = $request->file('logo');
            $logo_name = time() . $logo->getClientOriginalName();
            $logo->move(public_path('settings/'), $logo_name);
            $setting->logo = $logo_name;
        }
        if ($request->hasFile('favicon')) {
            $destination = public_path('settings/' . $setting->favicon);
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $favicon = $request->file('favicon');
            $favicon_name = time() . $favicon->getClientOriginalName();
            $favicon->move(public_path('settings/'), $favicon_name);
            $setting->favicon = $favicon_name;
        }

        if ($request->hasFile('login_background')) {
            $destination = public_path('settings/' . $setting->login_background);
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $login_background = $request->file('login_background');
            $login_background_name = time() . $login_background->getClientOriginalName();
            $login_background->move(public_path('settings/'), $login_background_name);
            $setting->login_background = $login_background_name;
        }


        $setting->update($request->except('_token', 'logo', 'favicon', 'login_background'));
        $notification = array(
            'message' => 'Setting Updated Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    public function payment()
    {
        $setting = Setting::first();
        return view('admin.setting.payment', compact('setting'));
    }

    public function paymentUpdate(Request $request)
    {
        $setting = Setting::first();
        $setting->update($request->except('_token'));
        $notification = array(
            'message' => 'payment Setting Updated Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }
}
