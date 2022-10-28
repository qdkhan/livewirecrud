<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $name, $email, $phone, $message;

    public function updated($fields){
        $this->validateOnly($fields, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'message' => 'required|min:10'
        ]);
    }

    public function submitForm(){
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'message' => 'required|min:10'
        ]);

        dd($this->name, $this->email, $this->phone, $this->message);
    }

    public function render()
    {
        return view('livewire.contact');
    }
}
