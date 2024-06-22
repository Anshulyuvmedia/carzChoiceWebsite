<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\CompanyProfile;
use App\Models\Master;
use App\Models\SubMaster;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class Store extends Controller
{
    public function updatecompanyprofile(Request $req, $id)
    {
        try {
            $companyprofiledata = $req->validate([
                'companyname' => 'required',
                'companylogo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'email' => 'required|email|max:255',
                'phonenumber' => 'required|max:20',
                'citystateprovince' => 'required|max:255',
                'postalcode' => 'required|max:100',
                'fburl' => 'url|max:255',
                'igurl' => 'url|max:255',
                'yturl' => 'url|max:255',
                'twurl' => 'url|max:255',
                'linkurl' => 'url|max:255',
                'address' => 'required|max:255',
            ]);

            // Retrieve the existing CompanyProfile record by $id
            $companyProfile = CompanyProfile::findOrFail($id);
            // dd($companyProfile);
            $companyProfile->companyname = $companyprofiledata['companyname'];
            $companyProfile->email = $companyprofiledata['email'];
            $companyProfile->phonenumber = $companyprofiledata['phonenumber'];
            $companyProfile->citystateprovince = $companyprofiledata['citystateprovince'];
            $companyProfile->postalcode = $companyprofiledata['postalcode'];
            $companyProfile->fburl = $companyprofiledata['fburl'];
            $companyProfile->igurl = $companyprofiledata['igurl'];
            $companyProfile->yturl = $companyprofiledata['yturl'];
            $companyProfile->twurl = $companyprofiledata['twurl'];
            $companyProfile->linkurl = $companyprofiledata['linkurl'];
            $companyProfile->address = $companyprofiledata['address'];
            if ($req->hasFile('companylogo')) {
                $companyProfile->companylogo = $req->file('companylogo')->store('logos', 'public');
            }
            $companyProfile->save();

            return back()->with('success', 'Profile Updated successfully.');

        } catch (Exception $e) {
            return back()->with('error', 'Failed to update profile. ' . $e->getMessage());
        }
    }


    public function storemaster(Request $req)
    {
        try {
            $masterdata = $req->validate([
                'label' => 'required',
                'value' => 'required',
            ]);
            Master::create($masterdata);
            return back()->with('success', 'Master Added..!!!!');

        } catch (Exception $e) {
            //return redirect()->route('master')->with('error', $e->getMessage());
            return redirect()->route('master')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function deletemaster($id)
    {
        $data = Master::find($id);
        $data->delete();
        return back()->with('success', "Deleted.>!!!");
    }

    public function storesubmaster(Request $req)
    {
        try {
            $submasterdata = $req->validate([
                'label' => 'required',
                'value' => 'required',
                'type' => 'required',
            ]);

            if ($req->hasFile('iconimage')) {
                $req->validate([
                    'iconimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $file = $req->file('iconimage');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/backend-assets/images'), $filename);
                $submasterdata['iconimage'] = $filename;
            }
            // dd($submasterdata);
            Master::create($submasterdata);
            Log::info('Inserted Successfully: ', ['user' => $submasterdata]);
            return back()->with('success', 'Sub-Master Added..!!!!');

        } catch (Exception $e) {
            return redirect()->route('submaster')->with('error', $e->getMessage());
            //return redirect()->route('submaster')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function getsubmasterajax($selectedCat)
    {
        $data = Master::where('type', '=', $selectedCat)->get();
        return response()->json($data);

    }
}
