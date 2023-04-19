<?php

namespace App\Http\Livewire\Modals;
use App\Http\Livewire\Modal;
use Livewire\Component;

class ExampleModal extends Modal
{
    public $text;

    public function render()
    {
        return view('livewire.modals.example-modal');
    }

    public function show($input = null) {
        $this->text = $input;
        $this->show = true;
    }
}
