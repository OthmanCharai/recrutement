<?php

namespace App\View\Components;

use Illuminate\View\Component;

class employe extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $city;
    public $country;
    public $image;
    public function __construct($name,$city,$country,$image)
    {
        //
        $this->name=$name;
        $this->city=$city;
        $this->country=$country;
        $this->image=$image;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.employe');
    }
}
