<?php

namespace App\Http\Livewire\Modals;

use App\Http\Livewire\Modal;
use App\Models\LookupType;
use App\Models\Sample;
use Livewire\Component;

class SampleModal extends Modal
{
    public Sample $sample;
    public $types;

    public $selected_type;

    protected $rules = [
        'sample.name' => ['required'],
        'sample.description' => [],
        'sample.sample_type_id' => ['']
    ];

    public function render()
    {
        $this->sample = new Sample();
        $this->types = LookupType::find(1)->lookups;
        return view('livewire.modals.sample-modal');
    }

    public function save() {
        $attributes = $this->validate()['sample'];

        Sample::create($attributes);

        $this->sample = new Sample();
        $this->show = false;
    }
}
