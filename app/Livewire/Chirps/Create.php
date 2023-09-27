<?php

namespace App\Livewire\Chirps;

use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{
    #[Rule('required|string|max:255')]
    public string $message = '';

    public function store(): void
    {
        $validated = $this->validate();

        auth()->user()->chirps()->create($validated);

        $this->message = '';
    }

    public function render()
    {
        return view('livewire.chirps.create');
    }
}
