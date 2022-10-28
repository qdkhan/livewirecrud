<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use App\Models\Student  AS StudentModel;

use Livewire\Component;

class Students extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $firstname, $lastname, $email, $phone;

    // public function updated($fields){
    //     $this->validateOnly($fields, [
    //         'firstname' => 'required|min:3',
    //         'lastname' => 'required|min:3',
    //         'email' => 'required|email',
    //         'phone' => 'required|min:10',
    //     ]);
    // }

    // public function submitForm(){
    //     $this->validate([
    //         'firstname' => 'required|min:3',
    //         'lastname' => 'required|min:3',
    //         'email' => 'required|email',
    //         'phone' => 'required|min:10',
    //     ]);

    //     // dd($this->name, $this->email, $this->phone, $this->message);
    // }

    public function resetInputFields(){
            $this->firstname = '';
            $this->lastname = '';
            $this->email = '';
            $this->phone = '';
    }

    public function store(){
        $validateData = $this->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:10',
        ]);

        StudentModel::create($validateData);
        session()->flash('message', 'Student Created Successfully');
        $this->resetInputFields();
        $this->emit('studentAdded');
    }

    public function render()
    {
        $students = StudentModel::select('id', 'firstname', 'lastname', 'email', 'phone')->paginate(10);
        return view('livewire.students', ['students' => $students]);
    }
}
