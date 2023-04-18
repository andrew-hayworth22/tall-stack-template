<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;

class DeleteUserForm extends Component
{
    public $password;

    protected $rules = [
        'password' => ['required', 'current-password']
    ];

    public function render()
    {
        return view('livewire.profile.delete-user-form');
    }

    public function deleteUser() {
        $this->validate();

        $user = auth()->user();

        Auth::logout();

        $user->delete();

        session()->invalidate();
        session()->regenerateToken();

        return Redirect::to('/');
    }
}
