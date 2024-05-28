<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Sorteio;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SorteioTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Sorteio::class)
            ->assertStatus(200);
    }
}
