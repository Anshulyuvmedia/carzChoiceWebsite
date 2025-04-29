<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\faqs;
class NewCarFaq extends Component
{
    public $faqdata;
    public function __construct()
    {
       $this->faqdata = Faqs::where('category','=','New Car')->get();
    }


    public function render(): View|Closure|string
    {
        return view('components.new-car-faq');
    }
}
