<?php
#{{--“सहनशीलता, क्षमता से अधिक श्रेष्ठ है और धैर्य सौन्दर्य से अधिक श्रेष्ठ है।”--}}
namespace App\View\Components;

use App\Models\Blog;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LatestCarUpdates extends Component
{
    public $carnews, $expert , $videos;
    public function __construct()
    {
        $this->carnews = Blog::orderBy('created_at','desc')->where('categorytype','=','Car News')->get();
        $this->expert = Blog::orderBy('created_at','desc')->where('categorytype','=','Expert Reviews')->get();
        $this->videos = Blog::orderBy('created_at','desc')->where('categorytype','=','Videos')->get();

    }

    public function render(): View|Closure|string
    {
        return view('components.latest-car-updates');
    }
}
