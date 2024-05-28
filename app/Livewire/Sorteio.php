<?php

namespace App\Livewire;

use App\Models\Candidate;
use Livewire\Component;

class Sorteio extends Component
{
    public $winner = null;

    public $cadidatos = [];

    public function render()
    {
        return view('livewire.sorteio');
    }

    public function run()
    {
        $winner = Candidate::query()->inRandomOrder()->first();
        $this->winner = $winner->name;
    }
}