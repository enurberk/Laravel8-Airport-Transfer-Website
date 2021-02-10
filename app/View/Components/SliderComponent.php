<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Transfer;
class SliderComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $sliders = Transfer::select('id','title', 'image', 'base_price', 'slug')->limit(4)->get();
        return view('components.slider-component',compact("sliders"));
    }
}
