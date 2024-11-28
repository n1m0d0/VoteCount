<?php

namespace App\Livewire\Forms;

use App\Models\Candidate;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CandidateForm extends Form
{
    public ?Candidate $candidate;

    #[Validate]
    public $name;

    protected function rules()
    {
        return [
            'name' => 'required|string|min:5',
        ];
    }

    public function setCandidate(Candidate $candidate)
    {
        $this->candidate = $candidate;

        $this->name = $candidate->name;
    }

    public function store()
    {
        $this->validate();

        Candidate::create($this->all());

        $this->reset();
    }

    public function update()
    {
        $this->validate();

        $this->candidate->update(
            $this->all()
        );

        $this->reset();
    }

    public function delete()
    {
        $this->candidate->delete();

        $this->reset();
    }

    public function clear()
    {
        $this->reset();
    }
}
