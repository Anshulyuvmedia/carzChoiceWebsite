<?php

namespace App\View\Components;
use App\Models\Blog;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LatestElectricCarsUpdate extends Component
{
    public $carnews, $expert , $videos;
    public function __construct()
    {
        $this->carnews = Blog::orderBy('created_at','desc')->where('categorytype','=','Featured Stories')->get();
        $this->expert = Blog::orderBy('created_at','desc')->where('categorytype','=','Electric Car Expert Reviews')->get();
        $this->videos = Blog::orderBy('created_at','desc')->where('categorytype','=','Electric Cars Videos')->get();
    }
    public function render(): View|Closure|string
    {
        return view('components.latest-electric-cars-update');
    }
}
