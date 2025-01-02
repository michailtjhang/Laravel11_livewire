<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Blade;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;

#[Lazy]
#[Title('Posts')]
class Index extends Component
{
    #[On('postCreated')]
    public function updatedLastPost($post)
    {
        // 
    }

    public function placeholder()
    {
        return view('livewire.posts.placeholder');
    }

    public function render()
    {
        sleep(3);
        $posts = Post::query()->latest()->get();
        
        return view('livewire.posts.index',[
        'posts' => $posts,
    ]);
    }
}
