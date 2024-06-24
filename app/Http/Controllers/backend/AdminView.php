<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\CompanyProfile;
use App\Models\FormAttribute;
use App\Models\Master;
use Illuminate\Http\Request;
use Auth;
class AdminView extends Controller
{
    public function adminprofile(){
        $user = Auth::user();
        return view('AdminPanel.adminprofile',compact('user'));
    }

    public function companyprofile(){
        $data = CompanyProfile::first();
        return view('AdminPanel.companyprofile',compact('data'));
    }
    public function master(){
        $masterdata = Master::orderBy('created_at','desc')->where('type','=','Master')->get();
        return view('AdminPanel.master',compact('masterdata'));
    }
    public function submaster(){
        $submasterdata = Master::where('type', '=', 'Master')->get();
        return view('AdminPanel.submaster',compact('submasterdata'));
    }

    public function addblog(){
        $blogdata = Master::where('type', '=', 'Blog')->get();
        return view('AdminPanel.addblog',compact('blogdata'));
    }

    public function bloglist(){
        $bloglistdata = Blog::orderBy('created_at','desc')->get();
        return view('AdminPanel.bloglist',compact('bloglistdata'));
    }

    public function editblog($id){
        $blogdata = Blog::find($id);
        $masterdata = Master::where('type', '=', 'Blog')->get();
        // dd($blogdata);
        return view('AdminPanel.editblog',compact('blogdata','masterdata'));
    }

    public function formattributes(){
        $masterdata = Master::where('type', '=', 'Form Type')->get();
        $attributesdata = FormAttribute::get();
        return view('AdminPanel.formattributes',compact('masterdata','attributesdata'));
    }
}
