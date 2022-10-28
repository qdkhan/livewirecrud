<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User AS UserModel;

class User extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    // public $users;

    public function render()
    {
        // $this->users = UserModel::all();
        $users = UserModel::select('id','name','email')->paginate(10);
        // dd($this->users);
        return view('livewire.user', ['users' => $users]);
    }
}
