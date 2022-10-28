<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Product extends Component
{

    public $title;
    public $name;
    public $infos = array();

    public function mount(){
        $this->infos[] = 'Application are Mounting......';
    }

    public function hydrate(){
        $this->infos[] = 'Application are hydrating......';
    }

    public function updating($name,$value){
        $this->infos[] = 'Application are updating......';
    }

    public function updated($name,$value){
        $this->infos[] = 'Application are updated......';
    }

    public function updatingName(){
        $this->infos[] = 'Application are updating Name Property......';
    }

    public function updatedName(){
        $this->infos[] = 'Updated Name Property......';
    }

    public function render()
    {
        return view('livewire.product');
    }
}
