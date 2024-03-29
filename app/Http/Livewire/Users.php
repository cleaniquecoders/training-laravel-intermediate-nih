<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Users extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::all();
    }
    
    public function render()
    {
        return view('livewire.users');
    }

    public function markAsVerified($id)
    {
        User::where('id', $id)->update([
            'email_verified_at' => now(),
        ]);
    }
}
