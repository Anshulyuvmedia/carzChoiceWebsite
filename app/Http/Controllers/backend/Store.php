<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\AdPost;
use App\Models\CarLoanEnquiry;
use App\Models\ColorVariant;
use App\Models\CompareVehicle;
use App\Models\DisplaySetting;
use App\Models\ProsandCons;
use App\Models\ProsCons;
use App\Models\RegisterDealer;
use App\Models\Review;
use App\Models\SliderImage;
use App\Models\AddFeature;
use App\Models\AddSpecification;
use App\Models\Blog;
use App\Models\CarList;
use App\Models\CompanyProfile;
use App\Models\faqs;
use App\Models\FormAttribute;
use App\Models\Lead;
use App\Models\Master;
use App\Models\RegisterUser;
use App\Models\Remark;
use App\Models\SubMaster;
use App\Models\AddVariant;
use App\Models\VariantFaq;
use App\Models\VehicleImage;
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
            // Validate the request data
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

            // Update the company profile fields
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

            // Handle company logo upload like blog image
            if ($req->hasFile('companylogo')) {
                $req->validate([
                    'companylogo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $file = $req->file('companylogo');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/backend-assets/'), $filename);
                $companyProfile->companylogo = $filename;
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

    public function insertblog(Request $req)
    {
        try {
            $blogdata = $req->validate([
                'categorytype' => 'required',
                'carname' => 'required',
                'blogtitle' => 'required',
                'blogpost' => 'required',
                'blogimg' => 'required',
            ]);

            $blogdata = new Blog();
            $blogdata->categorytype = $req->categorytype;
            $blogdata->carname = $req->carname;
            $blogdata->blogtitle = $req->blogtitle;
            $blogdata->blogpost = $req->blogpost;
            $blogdata->description = $req->description;
            $blogdata->vurl = $req->vurl;

            if ($req->hasFile('blogimg')) {
                $req->validate([
                    'blogimg' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                ]);
                $file = $req->file('blogimg');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/backend-assets/images'), $filename);
                $blogdata['blogimg'] = $filename;
            }
            // dd($blogdata);
            $blogdata->save();
            Log::info('Blod Inserted Successfully: ', ['user' => $blogdata]);
            return back()->with('success', 'Blog Added..!!!!');

        } catch (Exception $e) {
            return redirect()->route('addblog')->with('error', $e->getMessage());
            //return redirect()->route('addblog')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function deleteblog($id)
    {
        $data = Blog::find($id);
        $data->delete();
        return back()->with('success', "Deleted....!!!");
    }

    public function updateblog(Request $req)
    {
        try {
            $blogdata = $req->validate([
                'categorytype' => 'required',
                'carname' => 'required',
                'blogtitle' => 'required',
                'blogpost' => 'required',
            ]);

            $blogdatanew = Blog::findOrFail($req->blogid);
            $blogdatanew->categorytype = $req->categorytype;
            $blogdatanew->carname = $req->carname;
            $blogdatanew->blogtitle = $req->blogtitle;
            $blogdatanew->description = $req->description;
            $blogdatanew->blogpost = $req->blogpost;
            $blogdatanew->vurl = $req->vurl;

            if ($req->hasFile('blogimg')) {
                $req->validate([
                    'blogimg' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $file = $req->file('blogimg');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/backend-assets/images'), $filename);
                $blogdatanew['blogimg'] = $filename;
            }
            $blogdatanew->save();

            return back()->with('success', 'Blog Updated successfully.');

        } catch (Exception $e) {
            return back()->with('error', 'Failed to update profile. ' . $e->getMessage());
        }
    }

    public function updateblogstatus(Request $request)
    {
        $blog = Blog::find($request->id);
        if ($blog) {
            $blog->status = $request->status;
            $blog->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }

    public function filteroldcar($selectedtype)
    {
        $master = Master::where('type', $selectedtype)->get();
        return response()->json(['master' => $master]);
    }

    public function insertformattributes(Request $rq)
    {
        try {
            $data = $rq->validate([
                'cartype' => 'required',
                'formlabels' => 'required',
                'value' => 'required',
                'inputtype' => 'required',
            ]);

            FormAttribute::create([
                'cartype' => $rq->cartype,
                'formlabels' => $rq->formlabels,
                'value' => $rq->value,
                'inputtype' => $rq->inputtype,
            ]);
            Log::info('Form Attributes Inserted Successfully: ', ['user' => $data]);
            return back()->with('success', 'Attributes Added..!!!!');

        } catch (Exception $e) {
            //return redirect()->route('formattributes')->with('error', $e->getMessage());
            return redirect()->route('formattributes')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function deleteattribute($id)
    {
        $data = FormAttribute::find($id);
        $data->delete();
        return back()->with('success', "Deleted....!!!");
    }

    public function getattributesajax($selectedcartype, $selectedformlabel)
    {
        Log::info("Selected Car Type: $selectedcartype, Selected Form Label: $selectedformlabel");
        $data = FormAttribute::whereRaw('cartype = ? AND formlabels = ?', [$selectedcartype, $selectedformlabel])->get();
        return response()->json(['data' => $data]);
    }

    public function updateattributes(Request $request)
    {
        try {
            $attributes = FormAttribute::where('id', $request->attributeid)->update([
                'value' => $request->value,
                'inputtype' => $request->inputtype,
            ]);
            Log::info('Attributes Updated Successfully: ', ['attributes' => $attributes]);
            return back()->with('success', "Updated..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function insertlead(Request $request)
    {
        try {
            $data = $request->validate([
                'fullname' => 'required',
                'mobile' => 'required',
                'email' => 'required|email',
                'city' => 'required',
                'state' => 'required',
            ]);
            $nonRequiredFields = [
                'remarks' => $request->input('remarks'),
            ];
            $input = array_merge($data, $nonRequiredFields); //merging two arrays
            $leads = Lead::create($input);
            Log::info('Lead Inserted Successfully: ', ['lead' => $leads]);
            return back()->with('success', 'Lead Added..!!!!');

        } catch (Exception $e) {
            return redirect()->route('leadmanagement')->with('error', $e->getMessage());
            //return redirect()->route('leadmanagement')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function deletelead($id)
    {
        $data = Lead::find($id);
        $data->delete();
        return back()->with('success', "Deleted....!!!");
    }

    public function updatelead(Request $request)
    {
        try {
            $leads = Lead::where('id', $request->leadid)->update([
                'fullname' => $request->fullname,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'city' => $request->city,
                'state' => $request->state,
                'vehicle' => $request->vehicle,
                'remarks' => $request->remarks,
            ]);
            Log::info('Lead Updated Successfully: ', ['attributes' => $leads]);
            return back()->with('success', "Updated..!!!");
        } catch (Exception $e) {
            //return back()->with('error', $e->getMessage());
            return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function insertremarks(Request $request)
    {
        try {
            $data = $request->validate([
                'remarktext' => 'required',
            ]);

            Remark::create([
                'leadid' => $request->input('leadid'),
                'remarktext' => $request->input('remarktext'),
            ]);
            Log::info('Remark Inserted Successfully: ', ['user' => $data]);

            $jsondata = Remark::where('leadid', $request->leadid)->get();
            // dd($jsondata);
            return response()->json($jsondata);

        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function getremarks($id)
    {
        $jsondata = Remark::where('leadid', $id)->get();
        // dd($jsondata);
        return response()->json($jsondata);
    }

    public function updateleadstatus(Request $req)
    {
        $leadstatus = Lead::find($req->record_id);
        if ($leadstatus) {
            $leadstatus->leadstatus = $req->status;
            $leadstatus->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }

    public function datefilterleads(Request $req)
    {

        $datefrom = $req->input('datefrom');
        $dateto = $req->input('dateto');
        try {
            $datefrom = \DateTime::createFromFormat('d M, Y', $datefrom)->format('Y-m-d');
            $dateto = \DateTime::createFromFormat('d M, Y', $dateto)->format('Y-m-d');
        } catch (Exception $e) {
            return response()->json(['error' => 'Invalid date format. Please ensure dates are in "d M, Y" format.'], 400);
        }
        $leaddata = Lead::whereDate('created_at', '>=', $datefrom)
            ->whereDate('created_at', '<=', $dateto)
            ->orderBy('created_at', 'desc')
            ->get();
        return response()->json($leaddata);
    }

    public function storefaq(Request $req)
    {
        // dd($req->all());
        try {
            $data = $req->validate([
                'faqcategory' => 'required',
                'faqlabel' => 'required',
                'faqvalue' => 'required',
            ]);

            faqs::create([
                'category' => $req->input('faqcategory'),
                'faqlabel' => $req->input('faqlabel'),
                'faqvalue' => $req->input('faqvalue'),
            ]);
            Log::info('FAQ Inserted Successfully: ', ['faq' => $data]);
            return back()->with('success', 'FAQ Added..!!!!');
        } catch (Exception $f) {
            return back()->with('error', $f->getMessage());
            //return back()->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function deletefaq($id)
    {
        $data = faqs::find($id);
        $data->delete();
        return back()->with('success', "Deleted....!!!");
    }

    public function updatefaq(Request $request)
    {
        try {
            $faqs = faqs::where('id', $request->faqid)->update([
                'category' => $request->faqcategory,
                'faqlabel' => $request->faqlabel,
                'faqvalue' => $request->faqvalue,
            ]);
            Log::info('FAQ Updated Successfully: ', ['attributes' => $faqs]);
            return back()->with('success', "Updated..!!!");
        } catch (Exception $e) {
            //return back()->with('error', $e->getMessage());
            return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function insertvehicleimages(Request $request)
    {
        //dd($request->all());
        try {
            // Validate request data
            $data = $request->validate([
                'type' => 'required',
                'vehicle' => 'required',
                'title' => 'required',
                'mediatype' => 'required',
                'addimage' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'videourl' => 'required',
                'color' => 'required',
                'variantid' => 'required',
            ]);

            // Handle image upload if file is present
            if ($request->hasFile('addimage')) {
                $file = $request->file('addimage');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/backend-assets/images'), $filename);
                $data['addimage'] = $filename;
            }


            $vehicleimages = VehicleImage::create($data);
            return back()->with('success', 'Inserted Successfully..!!!!');
        } catch (Exception $e) {
            Log::error('Insert Failed: ', ['error' => $e->getMessage()]);
            return redirect()->route('vehicleimages')->with('error', $e->getMessage());
        }
    }

    public function deletevehicleimg($id)
    {
        $data = VehicleImage::find($id);
        $data->delete();
        return back()->with('success', "Deleted....!!!");
    }

    public function updatevehicleimgs(Request $request)
    {
        //dd( $request->all());
        try {
            // Fetch the existing vehicle image record by ID
            $vehicledata = VehicleImage::where('id', $request->vehicleimgid)->first();
            // Update the basic fields
            $vehicledata->type = $request->type;
            $vehicledata->color = $request->color ?? $vehicledata->color;
            $vehicledata->title = $request->title;
            $vehicledata->mediatype = $request->mediatype;

            // Handle media type logic
            if ($request->mediatype === 'video') {
                // Update video URL if media type is video
                $vehicledata->videourl = $request->videourl;
                // Clear the image field as it is a video
                $vehicledata->addimage = null;
            } elseif ($request->mediatype === 'image' && $request->hasFile('addimage')) {
                // Validate the uploaded image
                $request->validate([
                    'addimage' => 'image|mimes:jpeg,png,jpg,webp',
                ]);

                // Process the image file
                $file = $request->file('addimage');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/backend-assets/images'), $filename);

                // Update the image field
                $vehicledata->addimage = $filename;
                // Clear the video URL as it is an image
                $vehicledata->videourl = null;
            }

            // Save the updated data to the database
            $vehicledata->save();

            // Log success message
            Log::info('Updated Successfully: ', ['attributes' => $vehicledata]);

            // Redirect back with a success message
            return back()->with('success', "Updated successfully!");
        } catch (Exception $e) {
            // Log the error and return with an error message
            Log::error('Update Failed: ', ['error' => $e->getMessage()]);
            return back()->with('error', 'Update failed. Please try again.');
        }
    }


    public function insertcarlist(Request $request)
    {
        try {
            // $request->validate([
            //     'carname' => 'required',
            //     'brandname' => 'required',
            // ]);
            CarList::create([
                'carname' => $request->carname,
                'brandname' => $request->brandname,
            ]);
            return back()->with('success', 'Car List Added..!!!!');
        } catch (Exception $e) {
            return redirect()->route('addcarlist')->with('error', $e->getMessage());
            //return redirect()->route('addcarlist')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function deletecarlist($id)
    {
        $data = CarList::find($id);
        $data->delete();
        return back()->with('success', "Deleted....!!!");
    }

    public function updatecarlist(Request $request)
    {
        try {
            $carlist = CarList::where('id', $request->carlistid)->update([
                'carname' => $request->carname,
                'brandname' => $request->brandname,
            ]);
            return back()->with('success', "Updated..!!!");
        } catch (Exception $e) {
            //return back()->with('error', $e->getMessage());
            return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function insertvariants(Request $rq)
    {
        try {
            // Validate the input fields
            $data = $rq->validate([
                'carname' => 'required',
                'carmodalname' => 'required',
                'brandname' => 'required',
                'availabelstatus' => 'required',
                'price' => 'required',
                'pricetype' => 'required',
                'bodytype' => 'required',
                'mileage' => 'required',
                'engine' => 'required',
                'fueltype' => 'required',
                'transmission' => 'required',
                'seatingcapacity' => 'required',
                'userreportedmilage' => 'required',
                'brochure' => 'nullable',
                'colors' => 'required', // Ensure colors is required
            ]);

            // Brochure Upload
            if ($rq->hasFile('brochure')) {
                $rq->validate([
                    'brochure' => 'mimes:pdf|max:2048',
                ]);
                $brochurepdf = $rq->file('brochure');
                $finalfile = time() . '_' . $brochurepdf->getClientOriginalName();
                $brochurepdf->move(public_path('assets/backend-assets/images'), $finalfile);
                $data['brochure'] = $finalfile;
            }

            // Storing Colors in JSON format like label and value
            $colorsArray = $rq->colors; // Fetch the colors from the request, assuming it's already an array
            $formattedColors = [];
            foreach ($colorsArray as $colorOption) {
                list($label, $values) = explode('|', $colorOption); // Split label and values
                $colorValues = explode(',', $values); // Split the colors by comma
                $formattedColors[] = [
                    'label' => $label,
                    'value' => $colorValues
                ];
            }

            // Create a new variant record
            $variantdata = AddVariant::create([
                'carname' => $rq->carname,
                'brandname' => $rq->brandname,
                'carmodalname' => $rq->carmodalname,
                'availabelstatus' => $rq->availabelstatus,
                'price' => $rq->price,
                'pricetype' => $rq->pricetype,
                'bodytype' => $rq->bodytype,
                'mileage' => json_encode($rq->mileage),
                'engine' => $rq->engine,
                'fueltype' => json_encode($rq->fueltype),
                'transmission' => json_encode($rq->transmission),
                'colors' => json_encode($formattedColors), // Store formatted colors
                'seatingcapacity' => $rq->seatingcapacity,
                'userreportedmilage' => $rq->userreportedmilage,
                'keyfeatures' => $rq->keyfeatures,
                'summary' => $rq->summary,
                'brochure' => $finalfile ?? null,
            ]);
            //dd($variantdata);

            return back()->with('success', 'Variant Added..!!!!');

        } catch (Exception $e) {
            return redirect()->route('addvariant')->with('error', $e->getMessage());
        }
    }

    public function deletevariants($id)
    {
        $data = AddVariant::find($id);
        $data->delete();
        return back()->with('success', "Deleted....!!!");
    }

    public function updatevariants(Request $req)
    {
        //dd($req->all());
        $finalfile = $variantdata->brochure ?? null;
        if ($req->hasFile('brochure')) {
            $req->validate([
                'brochure' => 'mimes:pdf|max:2048',
            ]);
            $brochurepdf = $req->file('brochure');
            $finalfile = time() . '_' . $brochurepdf->getClientOriginalName();
            $brochurepdf->move(public_path('assets/backend-assets/images'), $finalfile);

        }
        try {
            $variantdata = AddVariant::findOrFail($req->variantid);
            $variantdata->carname = $req->carname;
            $variantdata->carmodalname = $req->carmodalname;
            $variantdata->availabelstatus = $req->availabelstatus;
            $variantdata->price = $req->price;
            $variantdata->pricetype = $req->pricetype;
            $variantdata->bodytype = $req->bodytype;
            $variantdata->mileage = $req->mileage;
            $variantdata->engine = $req->engine;
            $variantdata->fueltype = $req->fueltype;
            $variantdata->transmission = $req->transmission;
            $variantdata->seatingcapacity = $req->seatingcapacity;
            $variantdata->userreportedmilage = $req->userreportedmilage;
            $variantdata->keyfeatures = $req->keyfeatures;
            $variantdata->summary = $req->summary;
            if ($finalfile) {
                $variantdata->brochure = $finalfile;
            }
            // dd( $finalfile);
            $variantdata->save();
            return back()->with('success', 'Variant Updated successfully.');

        } catch (Exception $e) {
            return back()->with('error', 'Failed to update profile. ' . $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function updateloginstatus(Request $request)
    {
        $login = RegisterUser::find($request->id);
        if ($login) {
            $login->loginstatus = $request->status;
            $login->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }

    public function deleteuser($id)
    {
        $data = RegisterUser::find($id);
        $data->delete();
        return back()->with('success', "Deleted....!!!");
    }

    public function storefeatures(Request $req)
    {
        //dd($req->all());
        $formlabels = $req->input('formlabels');
        $featurenames = $req->input('featurenames');
        $values = $req->input('values');

        foreach ($formlabels as $labels) {
            $allvalues[] = [
                'type' => $labels,
                'label' => $featurenames[$labels],
                'value' => $values[$labels],
            ];
        }

        AddFeature::create([
            'vehicleid' => $req->vehicleid,
            'features' => json_encode($allvalues),
        ]);
        return back()->with('success', 'Features saved successfully.');
    }

    public function storespecifications(Request $req)
    {
        $formlabels = $req->input('formlabels');
        $Specificationname = $req->input('featurenames');
        $values = $req->input('values');

        $allspecifications = [];
        foreach ($formlabels as $labels) {
            foreach ($Specificationname[$labels] as $index => $name) {
                $allspecifications[] = [
                    'type' => $labels,
                    'label' => $name,
                    'value' => $values[$labels][$index],
                ];
            }
        }

        AddSpecification::create([
            'vehicleid' => $req->vehicleid,
            'specifications' => json_encode($allspecifications),
        ]);

        return back()->with('success', 'Specifications saved successfully.');
    }
    public function updatefeatures(Request $req)
    {
        //dd($req->all());
        $formlabels = $req->input('formlabels');
        $featurenames = $req->input('featurenames');
        $values = $req->input('values');
        $inputtypes = $req->input('inputtype');
        //dd($formlabels);
        // dd($values);
        foreach ($formlabels as $labels) {
            $allvalues[] = [
                'type' => $labels,
                'label' => $featurenames[$labels],
                'value' => $values[$labels],
                'inputtype' => $inputtypes
            ];
        }
         //dd($allvalues);
        AddFeature::where('vehicleid', $req->vehicleid)->update([
            'features' => json_encode($allvalues),
        ]);
        return back()->with('success', 'Features Updated....!!!!!!!');
    }

    public function updatespecs(Request $req)
    {
        //dd($req->all());  // To inspect the incoming request

        // Get all the request data
        $formlabels = $req->input('formlabels');
        $Specificationname = $req->input('featurenames');
        $values = $req->input('values');
        $inputtypes = $req->input('inputtype');

        $allspecifications = [];

        foreach ($formlabels as $labels) {
            foreach ($Specificationname[$labels] as $index => $name) {
                // Check if the input type is an array or a single value
                if (isset($inputtypes[$labels])) {
                    $inputType = is_array($inputtypes[$labels]) ?
                        ($inputtypes[$labels][$index] ?? 'text') :
                        $inputtypes[$labels];
                } else {
                    $inputType = 'text';  // Default if not found
                }

                $allspecifications[] = [
                    'type' => $labels,
                    'label' => $name,
                    'value' => $values[$labels][$index] ?? '',
                    'inputTypes' => $inputType
                ];
            }
        }
        //dd($allspecifications); 
        // Update the specifications in the database
        AddSpecification::where('vehicleid', $req->vehicleid)->update([
            'specifications' => json_encode($allspecifications),
        ]);

        return back()->with('success', 'Specifications Updated Successfully!');
    }
    public function insertbannerimages(Request $req)
    {
        try {

            $imagedata = new SliderImage();

            //Banner image
            if ($req->hasFile('mainbannerimg')) {
                $req->validate([
                    'mainbannerimg' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $file = $req->file('mainbannerimg');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/backend-assets/images'), $filename);
                $imagedata['mainbannerimg'] = $filename;
            }

            //Checkon Road image
            if ($req->hasFile('checkonroadimg')) {
                $req->validate([
                    'checkonroadimg' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $fileroad = $req->file('checkonroadimg');
                $filenameroad = time() . '_' . $fileroad->getClientOriginalName();
                $fileroad->move(public_path('assets/backend-assets/images'), $filenameroad);
                $imagedata['checkonroadimg'] = $filenameroad;
            }

            //Mutiple Image Upload
            $image = array();
            if ($files = $req->file('mobileimages')) {
                foreach ($files as $file) {
                    $image_name = md5(rand(1000, 10000));
                    $extension = strtolower($file->getClientOriginalExtension());
                    $image_fullname = $image_name . '.' . $extension;
                    $uploaded_path = "public/assets/backend-assets/images/";
                    $image_url = $uploaded_path . $image_fullname;
                    $file->move($uploaded_path, $image_fullname);
                    $image[] = $image_url;
                }
            }
            $imagedata->mobileimages = count($image) > 0 ? implode(',', $image) : null;
            $imagedata->save();
            return back()->with('success', 'Images Added..!!!!');

        } catch (Exception $e) {
            return redirect()->route('addbannerimmages')->with('error', $e->getMessage());
            //return redirect()->route('addbannerimmages')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function updatebannerimages(Request $req)
    {
        try {
            $imagedata = SliderImage::findOrFail($req->imageid);

            if ($req->hasFile('mainbannerimg')) {
                $req->validate([
                    'mainbannerimg' => 'image',
                ]);
                $file = $req->file('mainbannerimg');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/backend-assets/images'), $filename);

                // Delete old image
                if ($imagedata->mainbannerimg) {
                    $oldFile = public_path('assets/backend-assets/images/' . $imagedata->mainbannerimg);
                    if (file_exists($oldFile)) {
                        unlink($oldFile);
                    }
                }
                $imagedata['mainbannerimg'] = $filename;
            }

            // Update Checkon Road Image if provided
            if ($req->hasFile('checkonroadimg')) {
                $req->validate([
                    'checkonroadimg' => 'image',
                ]);
                $fileroad = $req->file('checkonroadimg');
                $filenameroad = time() . '_' . $fileroad->getClientOriginalName();
                $fileroad->move(public_path('assets/backend-assets/images'), $filenameroad);

                // Delete old image
                if ($imagedata->checkonroadimg) {
                    $oldFileRoad = public_path('assets/backend-assets/images/' . $imagedata->checkonroadimg);
                    if (file_exists($oldFileRoad)) {
                        unlink($oldFileRoad);
                    }
                }
                $imagedata['checkonroadimg'] = $filenameroad;
            }

            // Handle Multiple Image Uploads for Mobile Images
            $image = [];
            if ($files = $req->file('mobileimages')) {
                // If new images are uploaded, delete existing images
                if ($imagedata->mobileimages) {
                    $existingImages = explode(',', $imagedata->mobileimages);
                    foreach ($existingImages as $existingImage) {
                        $existingImagePath = public_path($existingImage);
                        if (file_exists($existingImagePath)) {
                            unlink($existingImagePath);
                        }
                    }
                }

                // Upload new images
                foreach ($files as $file) {
                    $image_name = md5(rand(1000, 10000));
                    $extension = strtolower($file->getClientOriginalExtension());
                    $image_fullname = $image_name . '.' . $extension;
                    $uploaded_path = "assets/backend-assets/images/";
                    $image_url = $uploaded_path . $image_fullname;
                    $file->move(public_path($uploaded_path), $image_fullname);
                    $image[] = $image_url;
                }
            }

            $imagedata->mobileimages = count($image) > 0 ? implode(',', $image) : null;
            $imagedata->save();
            return back()->with('success', 'Images Updated..!!!!');
        } catch (Exception $e) {
            return redirect()->route('addbannerimmages')->with('error', $e->getMessage());
            //return redirect()->route('addbannerimmages')->with('error', 'Update Failed. Try Again...!!!!');
        }
    }

    public function insertdisplaysettings(Request $rq)
    {
        //dd($rq->all());
        try {
            $data = $rq->validate([
                'type' => 'required',
                'vehicle' => 'required',
            ]);

            DisplaySetting::create([
                'vehicleid' => $rq->vehicle,
                'type' => $rq->type,
                'category' => $rq->category,

            ]);
            return back()->with('success', 'Settings Added..!!!!');

        } catch (Exception $e) {
            return redirect()->route('addvariant')->with('error', $e->getMessage());
            //return redirect()->route('addvariant')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function deletedisplaysettings($id)
    {
        $data = DisplaySetting::find($id);
        $data->delete();
        return back()->with('success', "Deleted....!!!");
    }

    public function insertcompare(Request $rq)
    {

        $adminuser = Auth::user();
        // dd(  $adminuser );
        try {
            $userdata = CompareVehicle::create([
                'adminid' => $adminuser->id,
                'userid' => 'null',
                'vehicles' => json_encode($rq->comparewith),

            ]);
            return back()->with('success', 'Comparison Added..!!!!');
        } catch (Exception $e) {
            //return redirect()->route('comparecars')->with('error', $e->getMessage());
            return redirect()->route('comparecars')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function deleteenquiry($id)
    {
        $data = CarLoanEnquiry::find($id);
        $data->delete();
        return back()->with('success', "Deleted....!!!");
    }

    public function updateenquirystatus(Request $req)
    {
        $enquirystatus = CarLoanEnquiry::find($req->record_id);
        if ($enquirystatus) {
            $enquirystatus->enquirystatus = $req->status;
            $enquirystatus->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }

    public function insertprosandcons(Request $rq)
    {

        try {

            $data = ProsCons::create([
                'vehicleid' => $rq->vehicleid,
                'pros' => json_encode($rq->pros),
                'cons' => json_encode($rq->cons),

            ]);
            return back()->with('success', 'Pros and Cons Added..!!!!');
        } catch (Exception $e) {
            //return redirect()->route('prosandcons')->with('error', $e->getMessage());
            return redirect()->route('prosandcons')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function insertvariantfaqs(Request $rq)
    {
        try {
            $data = VariantFaq::create([
                'vehicleid' => $rq->vehicleid,
                'faqlabel' => $rq->faqlabel,
                'faqvalue' => $rq->faqvalue,
            ]);
            return back()->with('success', 'Added..!!!!');
        } catch (Exception $e) {
            return redirect()->route('variantfaqs')->with('error', $e->getMessage());
            //return redirect()->route('variantfaqs')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function updatevariantfaq(Request $request)
    {
        try {
            $faqs = VariantFaq::where('id', $request->faqid)->update([
                'faqlabel' => $request->faqlabel,
                'faqvalue' => $request->faqvalue,
            ]);
            return back()->with('success', "Updated..!!!");
        } catch (Exception $e) {
            //return back()->with('error', $e->getMessage());
            return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function deletevariantfaq($id)
    {
        $data = VariantFaq::find($id);
        $data->delete();
        return back()->with('success', "Deleted....!!!");
    }

    public function insertcolorvariants(Request $request)
    {

        $colorNames = $request->input('colornames');
        $vehicleid = $request->input('vehicleid');
        $colorCodes = $request->input('colorcodes');
        $colorone = $request->input('colorone');
        $colortwo = $request->input('colortwo');


        $colors = [];
        foreach ($colorNames as $index => $row) {
            if ($row != null) {
                $colors[] = [
                    'label' => $row,
                    'value' => [$colorone[$index], $colortwo[$index]],
                ];
            }
        }
        try {
            $data = CarList::find($vehicleid);

            if ($data) {
                $data->update([
                    'colors' => $colors,
                ]);

                return redirect()->back()->with('success', 'Colors updated successfully!');
            } else {
                return redirect()->back()->with('error', 'Vehicle not found.');
            }
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update colors. Please try again.');
        }
    }

    public function deletedealer($id)
    {
        $data = RegisterDealer::find($id);
        $data->delete();
        return back()->with('success', "Deleted....!!!");
    }

    public function filterdealers(Request $request)
    {

        $brands = $request->input('brandname');
        $city = $request->input('cityname');
        // dd($brand,$city);

        $query = RegisterDealer::query();

        if (!empty($city)) {
            $query->where('district', $city);
        }

        if (!empty($brands)) {
            if (is_string($brands)) {
                $brands = json_decode($brands, true);
            }

            if (is_array($brands)) {
                foreach ($brands as $row) {
                    $query->whereRaw("JSON_CONTAINS(brands, '\"$row\"')");
                }
            } else {

            }
        }

        $data = $query->get();
        // dd($data);
        return response()->json($data);
    }

    public function updatevariantshowhidestatus(Request $request)
    {
        $login = AddVariant::find($request->id);
        if ($login) {
            $login->showhidestatus = $request->status;
            $login->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }

    public function inserthappycustomers(Request $req)
    {
        try {
            $data = $req->validate([
                'vehicle' => 'required',
                'customerfullname' => 'required',
                'ratings' => 'required',
                'discription' => 'required',
                'reviewimg' => 'required',
            ]);
            if ($req->hasFile('reviewimg')) {
                $req->validate([
                    'reviewimg' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                ]);
                $filereviewimg = $req->file('reviewimg');
                $filenameroad = time() . '_' . $filereviewimg->getClientOriginalName();
                $filereviewimg->move(public_path('assets/backend-assets/images'), $filenameroad);
                $imagedata['reviewimg'] = $filenameroad;
            }

            $data = Review::create([
                'vehicle' => $req->vehicle,
                'customerfullname' => $req->customerfullname,
                'discription' => $req->discription,
                'ratings' => $req->ratings,
                'reviewimg' => $imagedata['reviewimg'] ?? null,
            ]);
            return back()->with('success', 'Review Added..!!!!');
        } catch (Exception $e) {
            return redirect()->route('viewreviews')->with('error', $e->getMessage());
            //return redirect()->route('viewreviews')->with('error', 'Not Added Try Again...!!!!');
        }
    }

    public function deletereview($id)
    {
        $data = Review::find($id);
        $data->delete();
        return back()->with('success', "Deleted....!!!");
    }

    public function updatereviews(Request $req)
    {
        try {
            $review = Review::find($req->reviewid);

            if ($req->hasFile('reviewimg')) {
                $req->validate([
                    'reviewimg' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $filereviewimg = $req->file('reviewimg');
                $filenameroad = time() . '_' . $filereviewimg->getClientOriginalName();
                $filereviewimg->move(public_path('assets/backend-assets/images'), $filenameroad);
                $imagedata['reviewimg'] = $filenameroad;
            } else {
                // If no new image is uploaded, keep the old image
                $imagedata['reviewimg'] = $review->reviewimg;
            }

            $faqs = Review::where('id', $req->reviewid)->update([
                'vehicle' => $req->vehicle,
                'customerfullname' => $req->customerfullname,
                'discription' => $req->discription,
                'ratings' => $req->ratings,
                'reviewimg' => $imagedata['reviewimg'],
            ]);

            return back()->with('success', "Updated..!!!");
        } catch (Exception $e) {
            //return back()->with('error', $e->getMessage());
            return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function updatereviewstatus(Request $req)
    {
        $reviewstatus = Review::find($req->reviewid);
        if ($reviewstatus) {
            $reviewstatus->reviewstatus = $req->status;
            $reviewstatus->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }

    public function updateactivationstatus(Request $req)
    {
        $adpostdata = AdPost::find($req->record_id);
        // dd($adpostdata);
        if ($adpostdata) {
            $adpostdata->activationstatus = $req->status;
            $adpostdata->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }

    public function updatemaster(Request $request)
    {
        try {
            $carlist = Master::where('id', $request->masterid)->update([
                'label' => $request->label,
                'value' => $request->value,
            ]);
            return back()->with('success', "Updated..!!!");
        } catch (Exception $e) {
            //return back()->with('error', $e->getMessage());
            return back()->with('error', 'Not Updated..Try Again.....');
        }
    }
    public function updatesubmaster(Request $request)
    {
        try {
            if ($request->hasFile('iconimage')) {
                $request->validate([
                    'iconimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $file = $request->file('iconimage');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('assets/backend-assets/images'), $filename);
            }
            $carlist = Master::where('id', $request->submasterid)->update([
                'label' => $request->label,
                'type' => $request->type,
                'value' => $request->value,
                'iconimage' => $filename,
            ]);
            return back()->with('success', "Updated..!!!");
        } catch (Exception $e) {
            //return back()->with('error', $e->getMessage());
            return back()->with('error', 'Not Updated..Try Again.....');
        }
    }

    public function getfeaturestocopy(Request $req)
    {
        // Retrieve features from the base variant
        $features = AddFeature::where('vehicleid', $req->basevariant)->pluck('features')->first();

        if (!$features) {
            return back()->with('error', 'No Variant Selected');
        }

        try {
            // Check if the current vehicle already has features
            $existingFeature = AddFeature::where('vehicleid', $req->currentvehicleid)->exists();

            if ($existingFeature) {
                // If the vehicle has features, update them
                AddFeature::where('vehicleid', $req->currentvehicleid)->update([
                    'features' => $features,
                ]);
            } else {
                // If the vehicle doesn't have features, create a new entry
                AddFeature::create([
                    'vehicleid' => $req->currentvehicleid,
                    'features' => $features,
                ]);
            }

            return back()->with('success', 'Features Copied.');
        } catch (Exception $f) {
            return back()->with('error', $f->getMessage());
        }
    }
    public function getspecstocopy(Request $req)
    {
        // Retrieve features from the base variant
        $specs = AddSpecification::where('vehicleid', $req->basevariant)->pluck('specifications')->first();

        if (!$specs) {
            return back()->with('error', 'No Variant Selected');
        }

        try {
            // Check if the current vehicle already has specs
            $existingFeature = AddSpecification::where('vehicleid', $req->currentvehicleid)->exists();

            if ($existingFeature) {
                // If the vehicle has specs, update them
                AddSpecification::where('vehicleid', $req->currentvehicleid)->update([
                    'specifications' => $specs,
                ]);
            } else {
                // If the vehicle doesn't have specs, create a new entry
                AddSpecification::create([
                    'vehicleid' => $req->currentvehicleid,
                    'specifications' => $specs,
                ]);
            }

            return back()->with('success', 'Specifications Copied.');
        } catch (Exception $f) {
            return back()->with('error', $f->getMessage());
        }
    }

}
