<?php

namespace App\Http\Livewire\Modals;

use App\Http\Livewire\Modal;
use App\Models\Sample;
use Livewire\Component;

class SampleModal extends Modal
{
    public Sample $sample;

    protected $rules = [
        'sample.name' => ['required'],
        'sample.description' => []
    ];

    public function render()
    {
        $this->sample = new Sample();
        return view('livewire.modals.sample-modal');
    }

    public function save() {
        $attributes = $this->validate()['sample'];

        Sample::create($attributes);

        $this->sample = new Sample();
        $this->show = false;
    }
}
