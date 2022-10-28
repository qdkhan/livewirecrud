<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Action extends Component
{
    public $sum = 0;
    public $msg;
    public $num1;
    public $num2;
    
    public function addNumber($num1,$num2){
        $this->sum = $num1+$num2;
    }

    public function getSum(){
        $this->sum = $this->num1 + $this->num2;
    }

    public function displayMessage($msg){
        $this->msg = $msg;
    }

    public function render()
    {
        return view('livewire.action');
    }
}
