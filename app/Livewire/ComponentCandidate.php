<?php

namespace App\Livewire;

use App\Models\Candidate;
use Livewire\Component;

class ComponentCandidate extends Component
{
    public function render()
    {
        $candidates = Candidate::all();
        return view('livewire.component-candidate', compact('candidates'));
    }
}
