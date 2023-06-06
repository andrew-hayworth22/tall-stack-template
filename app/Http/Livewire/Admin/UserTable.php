<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    protected $listeners = ['updatedUsers' => 'refreshData'];

    public $users;

    public function render()
    {
        $this->refreshData();
        return view('livewire.admin.user-table', ['users' => $this->users]);
    }

    public function refreshData() {
        $this->users = User::all();
    }
}
