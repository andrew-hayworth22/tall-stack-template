<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dropdown extends Component
{
    /**
     * Array of dropdown elements
     */
    public $items;
    /**
     * Unknown Eloquent Model
     */
    public $model;
    /**
     * The models property name to update.
     */
    public $name;
    /**
     * Inital property value. Required for livewire to select the proper item at start.
     * The name must match the "wire:model"
     */
    public $property;

    public function updatingProperty($value)
    {
        $this->model->update([
            $this->name => $value
        ]);
    }

    public function mount($model, $items, $property)
    {
        $this->fill([
            'items' => $items,
            'model' => $model,
            'name' => $property,
            'property' => $model->{$property},
        ]);
    }

    public function render()
    {
        return view('livewire.dropdown');
    }
}
