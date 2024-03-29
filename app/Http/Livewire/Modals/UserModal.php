<?php

namespace App\Http\Livewire\Modals;

use App\Http\Livewire\Modal;
use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class UserModal extends Modal
{
    public User $user;
    public $roles;
    public $selectedRole;

    protected $rules = [
        'user.name' => ['required'],
        'user.email' => ['required']
    ];
    public function render()
    {
        $this->roles = Role::all();
        return view('livewire.modals.user-modal');
    }

    public function show($input = null) {
        $this->user = ($input == null) ? new User() : User::find($input);
        $this->show= true;
    }

    public function save() {
        $attributes = $this->validate()['user'];

        if($this->user->exists)
            $this->user->update($attributes);
        else
            User::create($attributes);

        $this->emit('updatedUsers');
        $this->show = false;
    }

    public function delete() {
        $this->user->delete();

        $this->emit('updatedUsers');
        $this->show = false;
    }

    public function addRole() {
        $role = Role::find($this->selectedRole);
        $this->user->roles()->save($role);

        $this->user->refresh();
        $this->emit('updatedUsers');
    }

    public function removeRole($input) {
        $this->user->roles()->detach($input);

        $this->user->refresh();
        $this->emit('updatedUsers');
    }
}
