<?php

namespace App\Livewire;

use App\Livewire\Forms\CandidateForm;
use App\Models\Candidate;
use Livewire\Component;
use Livewire\WithPagination;

class ComponentCandidate extends Component
{
    use WithPagination;

    public $activity;
    public $iteration;
    public $search;

    public CandidateForm $form;

    public $deleteModal;

    public function mount()
    {
        $this->activity = 'create';
        $this->iteration = rand(0, 999);
        $this->search = "";
        $this->deleteModal = false;
    }

    public function render()
    {
        /*
        $Query =  candidate::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            });
        $entities = $Query->orderBy('id', 'DESC')->paginate(10);
        return view('livewire.component- candidate', compact('entities'));
        */
        $candidates = Candidate::paginate(10);
        return view('livewire.component-candidate', compact('candidates'));
    }

    public function save()
    {
        if ($this->activity == "create") {
            $this->form->store();
        }

        if ($this->activity == "edit") {
            $this->form->update();
        }

        $this->activity = "create";
    }

    public function edit($id)
    {
        $candidate = Candidate::find($id);
        $this->form->setCandidate($candidate);
        $this->activity = "edit";
    }

    public function destroy($id)
    {
        $candidate = Candidate::find($id);
        $this->form->setCandidate($candidate);

        $this->deleteModal = true;
    }

    public function delete()
    {
        $this->form->delete();

        $this->deleteModal = false;
    }

    public function clear()
    {
        $this->form->clear();
        $this->deleteModal = false;
        $this->activity = "create";
    }

    public function resetSearch()
    {
        $this->reset(['search']);
        $this->resetPage();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
