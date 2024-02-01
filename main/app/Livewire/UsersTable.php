<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\User;

use WithPagination;


class UsersTable extends Component
{
    public $search = '';
    public $perPage = 4;
    public $admin = '';

    public function delete(User $user) {
        $user->delete();
    }

    public function render()
    {
        $users = User::search($this->search)
            ->when($this->admin !== '', function($query) {
                $query->where('is_admin', $this->admin);
            })
            ->paginate($this->perPage);
        return view('livewire.users-table',compact('users'));
    }
}
