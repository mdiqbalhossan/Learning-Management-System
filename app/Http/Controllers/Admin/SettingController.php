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

        if ($request->hasFile('breadcrumb')) {
            $destination = public_path('settings/' . $setting->breadcrumb_photo);
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $breadcrumb = $request->file('breadcrumb');
            $breadcrumb_name = time() . $breadcrumb->getClientOriginalName();
            $breadcrumb->move(public_path('settings/'), $breadcrumb_name);
            $setting->breadcrumb_photo = $breadcrumb_name;
        }


        $setting->update($request->except('_token', 'logo', 'favicon', 'breadcrumb'));
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

    public function social()
    {
        $setting = Setting::first();
        $setting->social_link = json_decode($setting->social_link);
        return view('admin.setting.social', compact('setting'));
    }

    public function socialUpdate(Request $request)
    {
        $setting = Setting::first();
        $setting->social_link = json_encode($request->except('_token'));
        $setting->update();
        $notification = array(
            'message' => 'Social Setting Updated Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    public function slider()
    {
        $setting = Setting::first();
        $setting->slider = json_decode($setting->slider);
        return view('admin.setting.slider', compact('setting'));
    }

    public function sliderUpdate(Request $request)
    {
        $setting = Setting::first();
        $setting->slider = json_decode($setting->slider);
        $data = [];
        $data['image'] = $setting->slider->image;
        if($request->hasFile('image')){
            $destination = public_path('settings/'.$setting->slider->image);
            if(File::exists($destination)){
                File::delete($destination);
            }
            $image = $request->file('image');
            $image_name = time().$image->getClientOriginalName();
            $image->move(public_path('settings/'), $image_name);
            $data['image'] = $image_name;
        }
        $data['title'] = $request->title;
        $data['description'] = $request->description;        
        $setting->slider = json_encode($data);
        $setting->update();
        $notification = array(
            'message' => 'Slider Setting Updated Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

    public function section()
    {
        $setting = Setting::first();
        $setting->section = json_decode($setting->section);
        return view('admin.setting.section', compact('setting'));
    }

    public function sectionUpdate(Request $request)
    {
        $setting = Setting::first();        
        $setting->update(json_encode($request->except('_token')));
        $notification = array(
            'message' => 'Section Setting Updated Successfully',
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }

}
