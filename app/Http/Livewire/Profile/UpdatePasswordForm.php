<?php

namespace App\Http\Livewire\Profile;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;

class UpdatePasswordForm extends Component
{
    public $currentPassword;
    public $newPassword;
    public $newPassword_confirmation;

    protected function rules() {
        return [
            'currentPassword' => ['required', 'current-password'],
            'newPassword' => ['required', Password::defaults(), 'confirmed']
        ];
    }


    public function render()
    {
        return view('livewire.profile.update-password-form');
    }

    public function updatePassword() {
        $this->validate();

        auth()->user()->update([
            'password' => Hash::make($this->newPassword)
        ]);

        return back()->with('status', 'password-updated');
    }
}
