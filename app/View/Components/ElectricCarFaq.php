<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\faqs;
class ElectricCarFaq extends Component
{
    public $faqdata;
    public function __construct()
    {
       $this->faqdata = Faqs::where('category','=','Electric Car')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.electric-car-faq');
    }
}
