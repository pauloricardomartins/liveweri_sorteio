<?php

namespace App\Livewire\Forms;

use App\Models\Candidate;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CandidateForm extends Form
{
    #[Validate('required|min:4')]
    public $name;

    #[Validate('required|email')]
    public $email;

    public $github;


    public function messages(): array
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'name.min' => 'O nome deve ter pelo menos 4 caracteres.',
        ];
    }
}