<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\LoginForm;
use Livewire\Component;
use Livewire\Attributes\Layout;

#[Layout('layouts.guest')]
class Login extends Component
{
    public LoginForm $form;
    public function login()
    {        
        $this->form->store();
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
