<?php

namespace App\Livewire;

use App\Livewire\Forms\EnclosureForm;
use App\Models\Enclosure;
use Livewire\Component;
use Livewire\WithPagination;

class ComponentEnclosure extends Component
{
    use WithPagination;

    public $activity;
    public $iteration;
    public $search;

    public EnclosureForm $form;

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
        $Query =  Enclosure::query()
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%');
            });

        $enclosures = $Query->orderBy('id', 'DESC')->paginate(10);

        return view('livewire.component-enclosure', compact('enclosures'));
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
        $enclosure = Enclosure::find($id);
        $this->form->setEnclosure($enclosure);
        $this->activity = "edit";
    }

    public function destroy($id)
    {
        $enclosure = Enclosure::find($id);
        $this->form->setEnclosure($enclosure);

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
