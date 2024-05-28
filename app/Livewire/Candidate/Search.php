<?php

namespace App\Livewire\Candidate;

use App\Models\Candidate;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Url;
use Livewire\Component;

class Search extends Component
{

    #[Url(keep: true, history: true)]
    public ?string $search = '';

    public function render()
    {
        return view('livewire.candidate.search');
    }

    #[Computed()]
    public function candidates()
    {
        if (!$this->search)
            return [];

        return Candidate::where('name', 'LIKE', '%' . $this->search . '%')->get();
    }
}