<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

#[Title('Users')]
class Index extends Component
{
    use WithPagination;
    public function render()
    {
        $user = User::query()->latest()->paginate(10);
        return view('livewire.users.index', [
            'users' => $user,
        ]);
    }
}
