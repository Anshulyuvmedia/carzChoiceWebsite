<?php
#{{--“सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।”--}}

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\AddFeature;
use App\Models\AddSpecification;
use App\Models\AddVariant;
use App\Models\Blog;
use App\Models\CarList;
use App\Models\CarLoanEnquiry;
use App\Models\ColorVariant;
use App\Models\InsuranceLead;
use App\Models\RegisterDealer;
use App\Models\PostOffices;
use App\Models\Review;
use App\Models\VariantFaq;
use App\Models\CompanyProfile;
use App\Models\CompareVehicle;
use App\Models\faqs;
use App\Models\FormAttribute;
use App\Models\Lead;
use App\Models\ProsCons;
use App\Models\SliderImage;
use App\Models\Master;
use App\Models\RegisterUser;
use App\Models\VehicleImage;
use Illuminate\Http\Request;
use Auth;
use DB;

class AdminView extends Controller
{
    public function dashboard(){
        $registeruserscount = RegisterUser::get()->count();
        $dealerscount = RegisterDealer::get()->count();
        $Leadscount = Lead::get()->count();
        $allvariants = AddVariant::get()->count();
        $registeredusers = RegisterUser::orderBy('created_at', 'desc')->get();
        $registereddealers = RegisterDealer::orderBy('created_at', 'desc')->get();
        $loanenquiries = CarLoanEnquiry::orderBy('created_at', 'desc')->get();
        $insuranceenq = InsuranceLead::orderBy('created_at', 'desc')->get();
        return view('AdminPanel.admindashboard',compact('registeruserscount','insuranceenq','dealerscount','Leadscount','allvariants','registeredusers','registereddealers','loanenquiries'));
    }
    public function adminprofile()
    {
        $user = Auth::user();
        $registeredusers = RegisterUser::orderBy('created_at', 'desc')->get();
        return view('AdminPanel.adminprofile', compact('user', 'registeredusers'));
    }

    public function companyprofile()
    {
        $data = CompanyProfile::first();
        return view('AdminPanel.companyprofile', compact('data'));
    }
    public function master()
    {
        $masterdata = Master::orderBy('created_at', 'desc')->where('type', '=', 'Master')->get();
        return view('AdminPanel.master', compact('masterdata'));
    }
    public function submaster()
    {
        $submasterdata = Master::where('type', '=', 'Master')->get();
        return view('AdminPanel.submaster', compact('submasterdata'));
    }

    public function addblog()
    {
        $blogdata = Master::where('type', '=', 'Blog')->get();
        $carname = CarList::get();
        return view('AdminPanel.addblog', compact('blogdata', 'carname'));
    }

    public function bloglist()
    {
        $bloglistdata = Blog::orderBy('created_at', 'desc')->get();
        return view('AdminPanel.bloglist', compact('bloglistdata'));
    }

    public function editblog($id)
    {
        $blogdata = Blog::find($id);
        $masterdata = Master::where('type', '=', 'Blog')->get();
        // dd($blogdata);
        $carname = CarList::get();
        return view('AdminPanel.editblog', compact('blogdata', 'masterdata', 'carname'));
    }

    public function formattributes()
    {
        $masterdata = Master::where('type', '=', 'Form Type')->get();
        $attributesdata = FormAttribute::get();
        return view('AdminPanel.formattributes', compact('masterdata', 'attributesdata'));
    }

    public function leadmanagement()
    {
        $leaddata = Lead::orderby('created_at', 'desc')->get();
        return view('AdminPanel.leadmanagement', compact('leaddata'));
    }

    public function faqs()
    {
        $masterdata = Master::where('type', '=', 'FAQ')->get();
        $faqdataa = faqs::get();
        return view('AdminPanel.faq', compact('masterdata', 'faqdataa'));
    }

    public function vehicleimages()
    {
        $masterdata = Master::where('type', '=', 'Vehicle Image')->get();
        $mastercolordata = Master::where('type', '=', 'Color')->get();
        $vehicleimgdata = VehicleImage::orderBy('created_at', 'desc')->get();
        $carlistdata = CarList::get();
        return view('AdminPanel.vehicleimages', compact('masterdata', 'vehicleimgdata', 'mastercolordata', 'carlistdata'));
    }

    public function addcarlist()
    {
        $masterdata = Master::where('type', '=', 'Brand')->get();
        $carlistdata = CarList::get();
        return view('AdminPanel.addcarlist', compact('masterdata', 'carlistdata'));
    }

    public function addvariant()
    {
        $cardata = CarList::get();
        $bodytype = Master::where('type', 'Body Type')->get();
        return view('AdminPanel.addvariant', compact('cardata', 'bodytype'));
    }

    public function variantslist()
    {
        $variantlist = AddVariant::orderBy('created_at', 'desc')->get();
        return view('AdminPanel.variantlist', compact('variantlist'));
    }

    public function editvariant($id)
    {
        $variantdata = AddVariant::find($id);
        $carlistdata = CarList::get();
        return view('AdminPanel.editvariant', compact('variantdata', 'carlistdata'));
    }

    public function userslist()
    {
        $registeredusers = RegisterUser::orderBy('created_at', 'desc')->get();
        return view('AdminPanel.userslist', compact('registeredusers'));
    }

    public function addfeatures($id)
    {
        $features = FormAttribute::where('cartype', '=', 'features')->get();
        $featureslist = AddFeature::where('vehicleid', '=', $id)->get();
        $grouped = [];

        if (count($featureslist) > 0) {
            $featuresData = json_decode($featureslist[0]->features);

            if ($featuresData) {
                foreach ($featuresData as $index => $featureData) {
                    $type = $featureData->type;
                    $label = $featureData->label;
                    $value = $featureData->value;
                    if (!isset($grouped[$type])) {
                        $grouped[$type] = [];
                    }
                    $grouped[$type][] = (object) [
                        'label' => $label,
                        'value' => $value,
                    ];
                }
            }
        }

        return view('AdminPanel.addfeatures', compact('features', 'featureslist', 'grouped'))->with('vehicleid', $id);
    }


    public function addspecifications($id)
    {
        $specifications = FormAttribute::where('cartype', '=', 'specifications')->get();
        $specificationslist = AddSpecification::where('vehicleid', '=', $id)->get();
        $groupedspecs = [];

        if (count($specificationslist) > 0) {
            $specsdata = json_decode($specificationslist[0]->specifications);

            if ($specsdata) {
                foreach ($specsdata as $specData) {
                    $type = $specData->type;
                    $label = $specData->label;
                    $value = $specData->value;
                    if (!isset($groupedspecs[$type])) {
                        $groupedspecs[$type] = [];
                    }
                    $groupedspecs[$type][] = (object) [
                        'label' => $label,
                        'value' => $value,
                    ];
                }
            }
        }

        return view('AdminPanel.addspecifications', compact('specifications', 'specificationslist', 'groupedspecs'))->with('vehicleid', $id);
    }

    public function addbannerimmages()
    {
        $imagesdata = SliderImage::get();
        return view('AdminPanel.addbannerimages', compact('imagesdata'));
    }

    public function displaysettings()
    {
        $carlistdrop = Carlist::get();
        $carlistdata = CarList::join('display_settings', 'display_settings.vehicleid', '=', 'car_lists.id')
            ->select('display_settings.*', 'car_lists.carname', 'car_lists.brandname')->get();
        return view('AdminPanel.displaysettings', compact('carlistdata', 'carlistdrop'));
    }

    public function comparecars()
    {
        $variantlist = AddVariant::where('showhidestatus', '=', 1)->get();
        $compare = CompareVehicle::get();
        $new = [];
        foreach ($compare as $data) {
            $ids = json_decode($data->vehicles);
            $newarray = AddVariant::whereIn('id', $ids)->select('carname', 'carmodalname')
                ->where('showhidestatus', '=', 1)->get();
            $new[] = ['id' => $data->id, 'vehicles' => $newarray];
        }
        $array = $new;
        return view('AdminPanel.comparecars', compact('variantlist', 'array'));
    }

    public function allenquiriessite()
    {
        $allenquiries = CarLoanEnquiry::orderBy('created_at', 'desc')->get();
        return view('AdminPanel.allenquiries', compact('allenquiries'));
    }

    public function prosandcons($id)
    {
        $proscons = ProsCons::where('vehicleid',$id)->first();
        // dd($proscons);
        $pros = [];
        $cons = [];
        $vehicleid = $id;
        if($proscons){
            $pros = $proscons->pros;
            $cons = $proscons->cons;
            $vehicleid = $id;
        }
        return view('AdminPanel.prosandcons', compact('vehicleid', 'pros', 'cons', 'proscons'));
    }

    public function variantfaqs($id, $carname)
    {
        $faqs = VariantFaq::where('vehicleid',$id)->get();
        $vehicleid = $id;
        $carnamedata = $carname;
        return view('AdminPanel.variantfaqs', compact('vehicleid', 'faqs', 'carnamedata'));
    }

    public function addvehicleimages($id, $carname)
    {
        $carnamedata = $carname;
        $data = AddVariant::find($id);
        $masterdata = Master::where('type', '=', 'Vehicle Image')->get();
        $mastercolordata = Master::where('type', '=', 'Color')->get();
        $vehicleimgdata = VehicleImage::where('vehicle', '=', $carname)->orderBy('created_at', 'desc')->get();
        $carlistdata = CarList::get();
        $imageslist = CarList::where('carname', $data->carname)->get()->pluck('colors');
        $colors = json_decode($imageslist[0]);
        return view('AdminPanel.vehicleimages', compact('data', 'colors', 'imageslist', 'carnamedata', 'masterdata', 'mastercolordata', 'vehicleimgdata', 'carlistdata'));
    }

    public function dealerslist($status)
    {
        $registereddealers = RegisterDealer::where('dealertype', $status)->orderBy('created_at', 'desc')->get();
        $masterdata = Master::where('type', '=', 'Brand')->get();
        $statedata = PostOffices::select('District', DB::raw('COUNT(id) as count'))->groupBy('District')->get();
        return view('AdminPanel.dealerslist', compact('registereddealers', 'masterdata', 'statedata'));
    }

    public function adddealerdetails()
    {
        $brands = Master::where('type', '=', 'Brand')->get();
        $statedata = PostOffices::select('District', DB::raw('COUNT(id) as count'))->groupBy('District')->get();
        return view('AdminPanel.adddealerdetails', compact('brands', 'statedata'));
    }

    public function viewreviews(){
        $variantdata = AddVariant::all();
        return view('AdminPanel.happycustomers',compact('variantdata'));
    }

    public function allreviews(){
        $variantdata = AddVariant::all();
        $allreviews = Review::orderBy('created_at','desc')->get();
        return view('AdminPanel.allreviews',compact('allreviews','variantdata'));
    }

    public function allinsuranceleads(){
        $leads = InsuranceLead::orderBy('created_at','desc')->get();
        return view('AdminPanel.insuranceleads',compact('leads'));
    }
}
