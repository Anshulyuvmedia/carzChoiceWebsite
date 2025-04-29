<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Blog;
class CarLoanBlogSingle extends Component
{
    public $carloan;
    public function __construct()
    {
        $this->carloan = Blog::orderBy('created_at','desc')->where('categorytype','=','Car Loan')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.car-loan-blog-single');
    }
}
