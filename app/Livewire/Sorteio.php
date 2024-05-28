<?php

namespace App\Livewire;

use App\Models\Candidate;
use Livewire\Attributes\On;
use Livewire\Component;

class Sorteio extends Component
{
    public $winner = null;

    public $cadidatos = [];

    public function mount()
    {
        sleep(2);
    }

    public function placeholder()
    {
        return <<<'html'
            <div class="text-white bg-slate-700 font-bold text-center rounded-lg p-4">
                Carregando...
                </div>
        html;
    }

    public function render()
    {
        return view('livewire.sorteio');
    }


    #[On('candidate::created')]
    public function run()
    {
        $candidates = Candidate::query()->inRandomOrder()->get();
        foreach ($candidates as $candidate) {
            $this->stream('winner', $candidate->name, true);
            usleep(3000);
        }

        $winner = Candidate::query()->inRandomOrder()->first();
        $this->winner = $winner?->name;

        $this->js('confetti()');
    }
}