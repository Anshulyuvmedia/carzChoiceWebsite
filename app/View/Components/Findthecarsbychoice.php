<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Master;

class Findthecarsbychoice extends Component
{
    public $budgets, $bodytypes, $fueltypes, $transmissions, $seatings,$cartype;
    public function __construct($cartype)
    {
        $this->cartype = $cartype;
        $this->budgets =  Master::where('type','=','Budget')->get();
        $this->bodytypes = Master::where('type','=','Body Type')->get();
        $this->fueltypes = Master::where('type','=','Fuel Type')->get();
        $this->transmissions = Master::where('type','=','Transmission')->get();
        $this->seatings = Master::where('type','=','Seating Capacity')->get();
    }
    public function render(): View|Closure|string
    {
        return view('components.findthecarsbychoice');
    }
}
