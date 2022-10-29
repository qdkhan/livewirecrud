<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use App\Models\Student  AS StudentModel;

use Livewire\Component;

class Students extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $firstname, $lastname, $email, $phone, $ids;

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

    public function resetInputFields () {
            $this->firstname = '';
            $this->lastname = '';
            $this->email = '';
            $this->phone = '';
    }

    public function store () {
        $validateData = $this->validate([
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:10',
        ]);

        StudentModel::create($validateData);
        session()->flash('success', 'Student Created Successfully');
        $this->resetInputFields();
        $this->emit('studentAdded');
    }

    public function edit ($id){
        $student = StudentModel::find($id);
        $this->ids = $student->id;
        $this->firstname = $student->firstname;
        $this->lastname = $student->lastname;
        $this->email = $student->email;
        $this->phone = $student->phone;
        // dd($id);
        // dd($student);
    }

    public function update () {
        /* $this->validate([
            'ids' => 'required|numeric',
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:10',
        ]);

        if($this->ids){
            $student = StudentModel::first();
            $student->update([

            ]);
        } */

        $validateData = $this->validate([
            'ids' => 'required|numeric',
            'firstname' => 'required|min:3',
            'lastname' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:10',
        ]);

        $student = StudentModel::find($this->ids);
        $student->update($validateData);
        session()->flash('success', 'Record Updated Successfully');
        $this->resetInputFields();
        $this->emit('studentUpdated');
    }

    public function delete ($id) {
       
        // if($id){
        //     // $record = StudentModel::findOrFail($id);
        //     // $record->delete();
        //     StudentModel::destroy($id);
        //     session()->flash('success', 'Record Deleted Successfully');
        // }

        if($id) StudentModel::destroy($id);
        session()->flash('success', 'Record Deleted Successfully');
    }

    public function render()
    {
        $students = StudentModel::select('id', 'firstname', 'lastname', 'email', 'phone')->orderBy('id', 'DESC')->paginate(10);
        return view('livewire.students', ['students' => $students]);
    }
}
