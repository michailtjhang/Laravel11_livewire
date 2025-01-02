<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;

class PostForm extends Form
{
    #[Rule(['required', 'max:1000'])]
    public string $body = '';

    public function store()
    {
        $post = Auth::user()->posts()->create(
            $this->validate()
        );

        // flash message session
        // session()->flash('message', 'Post created successfully');

        // flash message using livewire
        flash('Post created successfully', 'success');

        $this->reset();

        return $post;
    }
}
