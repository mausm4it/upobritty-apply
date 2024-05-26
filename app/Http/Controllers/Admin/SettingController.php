<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index(){
        return view('admin.settings');
    }

    public function logo_upload(Request $request , $id){
        $settings = Setting::find($id);

        
        if ($request->hasFile('logo')) {
              
            if ($settings->logo) {
                Storage::delete($settings->logo);
            }
            $imagePath = $request->file('logo')->storeAs('logo', 'logo' . now()->format('YmdHis') . '.' . $request->file('logo')->getClientOriginalExtension());
            $settings->logo = $imagePath;
           
        }

        if ($request->hasFile('icon')) {
              
            if ($settings->icon) {
                Storage::delete($settings->icon);
            }
            $imagePath = $request->file('icon')->storeAs('icon', 'icon' . now()->format('YmdHis') . '.' . $request->file('icon')->getClientOriginalExtension());
            $settings->icon = $imagePath;
           
        }

        $settings->save();

       return redirect()->back()->with('success', 'Logo, Icon Updated Successfully !');

        
    }

    public function siteName_upload(Request $request , $id){
         $settings = Setting::find($id);
         $settings->site_name = $request->site_name;
         $settings->footer_name = $request->footer_name;
         $settings->save();

       return redirect()->back()->with('success', 'Site Name, Site Footer Name Updated Successfully !');
    }
}