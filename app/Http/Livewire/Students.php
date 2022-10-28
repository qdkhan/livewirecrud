<?php

namespace App\Http\Livewire;
use Livewire\WithPagination;
use App\Models\Student  AS StudentModel;

use Livewire\Component;

class Students extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $students = StudentModel::select('id', 'firstname', 'lastname', 'email', 'phone')->paginate(10);
        return view('livewire.students', ['students' => $students]);
    }
}
