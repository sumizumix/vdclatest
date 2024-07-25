<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PageAboutItem;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use DB;

class PageAboutController extends Controller
{
    public function index()
    {
        $page_about = PageAboutItem::where('id',1)->first();
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
        PageAboutItem::where('id',1)->update($data);

        return redirect()->back()->with('success', 'About Page Content is updated successfully!');

    }
}