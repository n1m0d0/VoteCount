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

    public function setPost(Candidate $candidate)
    {
        $this->candidate = $candidate;

        $this->name = $candidate->name;
    }

    public function store()
    {
        $this->validate();

        Candidate::create($this->all());
    }

    public function update()
    {
        $this->validate();

        $this->candidate->update(
            $this->all()
        );
    }

    public function delete()
    {
        $this->candidate->delete();
    }
}
