<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\MultipleImage;

class MultipleImages extends Component
{
    use WithFileUploads;

    public $images = array();

    public function store() {
        foreach ($this->images as $key => $image) {
            $this->images[$key] = $image->store('multi_img','public'); 
        }
        $this->images = json_encode($this->images);
        MultipleImage::create(['images' => $this->images]);
        session()->flash('success', 'Image Inserted Successfully');
        $this->emit('imageUploaded');
    }

    public function render()
    {
        return view('livewire.multiple-images');
    }
}
