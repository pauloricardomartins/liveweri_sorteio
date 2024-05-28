<?php

namespace App\Livewire\Candidate;

use App\Livewire\Forms\CandidateForm;
use App\Models\Candidate;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{
    public CandidateForm $form;

    public function save()
    {
        Candidate::create($this->form->all());
        $this->dispatch('candidate::created');
    }


    public function render()
    {
        return view('livewire.candidate.create');
    }
}