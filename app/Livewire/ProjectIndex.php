<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class ProjectIndex extends Component
{
    use WithPagination;

    public string $search = '';
    public string $category = '';

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function updatedCategory(): void
    {
        $this->resetPage();
    }

    public function render()
    {
        $projects = Project::query()
            ->where('published', true)
            ->when($this->search !== '', function ($query) {
                $query->where(function ($subQuery) {
                    $subQuery
                        ->where('title', 'like', '%' . $this->search . '%')
                        ->orWhere('summary', 'like', '%' . $this->search . '%');
                });
            })
            ->when($this->category !== '', function ($query) {
                $query->where('category', $this->category);
            })
            ->latest()
            ->paginate(9);

        return view('livewire.project-index', compact('projects'));
    }
}   