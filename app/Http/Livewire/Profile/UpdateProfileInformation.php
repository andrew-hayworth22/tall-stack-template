<?php

namespace App\Http\Livewire\Profile;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Livewire\Component;

class UpdateProfileInformation extends Component
{
    public $name;
    public $email;

    protected function rules() {
        return [
            'name' => ['string', 'max:255'],
            'email' => ['email', 'max:255', Rule::unique(User::class)->ignore(auth()->user()->id)]
        ];
    }

    public function boot() {
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
    }

    public function render()
    {
        return view('livewire.profile.update-profile-information');
    }

    public function updateProfile() {
        auth()->user()->fill($this->validate());

        if (auth()->user()->isDirty('email')) {
            auth()->user()->email_verified_at = null;
        }

        auth()->user()->save();

        return back()->with('status', 'profile-updated');
    }

    public function sendVerification() {
        if (auth()->user()->hasVerifiedEmail()) {
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        auth()->user()->sendEmailVerificationNotification();

        return Redirect::route('profile.edit')->with('status', 'verification-link-sent');
    }
}
