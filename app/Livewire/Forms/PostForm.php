<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;

class PostForm extends Form
{
    
    #[Rule(['required', 'min:3'])]
    public string $title = '';

    #[Rule(['required', 'max:1000'])]
    public string $body = '';

    public function store()
    {
        $user = User::find(1);
        $user->posts()->create(
            $this->validate()
        );

        $this->reset();
    }
}
