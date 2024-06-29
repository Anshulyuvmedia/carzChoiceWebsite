<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AddVariant;
use App\Models\Blog;
use App\Models\CarList;
use App\Models\CompanyProfile;
use App\Models\faqs;
use App\Models\FormAttribute;
use App\Models\Lead;
use App\Models\Master;
use App\Models\VehicleImage;
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

    public function leadmanagement(){
        $leaddata = Lead::orderby('created_at','desc')->get();
        return view('AdminPanel.leadmanagement',compact('leaddata'));
    }

    public function faqs(){
        $masterdata = Master::where('type', '=', 'FAQ')->get();
        $faqdataa = faqs::get();
        return view('AdminPanel.faq',compact('masterdata','faqdataa'));
    }

    public function vehicleimages(){
        $masterdata = Master::where('type', '=', 'Vehicle Image')->get();
        $mastercolordata = Master::where('type', '=', 'Color')->get();
        $vehicleimgdata = VehicleImage::orderBy('created_at','desc')->get();
        $carlistdata = CarList::get();
        return view('AdminPanel.vehicleimages',compact('masterdata','vehicleimgdata','mastercolordata','carlistdata'));
    }

    public function addcarlist(){
        $masterdata = Master::where('type', '=', 'Brand')->get();
        $carlistdata = CarList::get();
        return view('AdminPanel.addcarlist',compact('masterdata','carlistdata'));
    }

    public function addvariant(){
        $cardata = CarList::get();
        return view('AdminPanel.addvariant',compact('cardata'));
    }

    public function variantslist(){
        $variantlist = AddVariant::orderBy('created_at','desc')->get();
        return view('AdminPanel.variantlist',compact('variantlist'));
    }

    public function editvariant($id){
        $variantdata = AddVariant::find($id);
        $carlistdata = CarList::get();
        return view('AdminPanel.editvariant',compact('variantdata','carlistdata'));
    }
}
