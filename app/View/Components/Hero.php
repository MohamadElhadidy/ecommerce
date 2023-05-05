<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\File;

class Hero extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $path = public_path('sliders');

        $sliders = array_filter(File::files($path), fn ($slider) =>  in_array(pathinfo($slider)['extension'], ['jpg', 'png', 'jpeg']));

        return view('components.hero', ['sliders' => $sliders]);
    }
}
