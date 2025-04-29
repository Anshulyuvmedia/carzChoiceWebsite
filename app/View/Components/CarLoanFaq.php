<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\faqs;
class CarLoanFaq extends Component
{
    public $faqcarloan;
    public function __construct()
    {
        $this->faqcarloan = Faqs::where('category','=','Car Loan')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.car-loan-faq');
    }
}
