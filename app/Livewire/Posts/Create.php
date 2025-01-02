<?php

namespace App\Livewire\Posts;

use App\Livewire\Forms\PostForm;
use Livewire\Component;

class Create extends Component
{
    public PostForm $form;
    public function save()
    {
        $post = $this->form->store();

        $this->dispatch('postCreated', $post);
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
