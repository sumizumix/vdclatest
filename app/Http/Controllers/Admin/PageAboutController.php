<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageAboutItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;
use Hash;
use Auth;


class PageAboutController extends Controller
{
    public function index()
    {
        $page_about = PageAboutItem::where('id', 1)->first();
        return view('admin.auth.about.index', compact('page_about'));
    }



    public function update(Request $request)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }

        $data['name'] = $request->input('name');
        $data['description'] = $request->input('description');
        $data['seotitle'] = $request->input('seotitle');
        $data['seodescription'] = $request->input('seodescription');
        PageAboutItem::where('id', 1)->update($data);

        return redirect()->back()->with('success', 'About Page Content is updated successfully!');
    }



    public function adminindex()
    {
        $profile = User::where('id', Auth::user()->id)->first();
        return view('layout.admin_app_header', compact('profile'));
    }
    public function updateprofile(Request $request)
    {


        $type = $request->input('type');
    
        if ($type == "profile") {
            $data['name'] = $request->input('name');
            $data['email'] = $request->input('email');
        } elseif ($type == "password") {

            $data['password'] =  Hash::make($request->input('password'));
        }



        User::where('id', Auth::user()->id)->update($data);

        return redirect()->back()->with('success', 'updated profile successfully!');
    }




    public function userindex()
    {
        $profile = User::where('id', Auth::user()->id)->first();
        return view('layout.header', compact('profile'));
    }
    public function userupdateprofile(Request $request)
    {  
            $data['name'] = $request->input('name');
  
        User::where('id', Auth::user()->id)->update($data);

        return redirect()->back()->with('success', 'updated profile successfully!');
    }
}
