<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
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
}
