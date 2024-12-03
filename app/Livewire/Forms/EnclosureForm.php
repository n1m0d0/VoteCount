<?php

namespace App\Livewire\Forms;

use App\Models\Enclosure;
use Livewire\Attributes\Validate;
use Livewire\Form;

class EnclosureForm extends Form
{
    public ?Enclosure $enclosure;

    #[Validate]
    public $name;
    public $address;

    protected function rules()
    {
        return [
            'name' => 'required|string|min:5',
            'address' => 'required|string|min:10',
        ];
    }

    public function setEnclosure(Enclosure $enclosure)
    {
        $this->enclosure = $enclosure;

        $this->name = $enclosure->name;
        $this->address = $enclosure->address;
    }

    public function store()
    {
        $this->validate();

        Enclosure::create($this->all());

        $this->reset();
    }

    public function update()
    {
        $this->validate();

        $this->enclosure->update(
            $this->all()
        );

        $this->reset();
    }

    public function delete()
    {
        $this->enclosure->delete();

        $this->reset();
    }

    public function clear()
    {
        $this->reset();
    }
}
