<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class UserTable extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.admin.user-table', ['users' => $users]);
    }
}
