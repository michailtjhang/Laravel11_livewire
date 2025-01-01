<?php

namespace App\Livewire\Posts;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Create extends Component
{
    #[Rule(['required', 'min:3'])]
    public string $title = '';

    #[Rule(['required', 'max:1000'])]
    public string $body = '';

    public function save()
    {
        $user = User::find(1);
        $validatedData = $this->validate();

        $user->posts()->create($validatedData);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
