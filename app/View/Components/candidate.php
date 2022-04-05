<?php

namespace App\View\Components;

use Illuminate\View\Component;

class candidate extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $address;
    public $city;
    public $country;
    public $image;
    public $id;

    public function __construct($name,$address,$city,$country,$image,$id)
    {
        //
        $this->name=$name;
        $this->address=$address;
        $this->city=$city;
        $this->country=$country;
        $this->image=$image;
        $this->id=$id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.candidate');
    }
}
