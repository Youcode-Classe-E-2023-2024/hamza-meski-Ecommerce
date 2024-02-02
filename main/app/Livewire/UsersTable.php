<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\User;

use Livewire\WithPagination;


class UsersTable extends Component
{
    use WithPagination;
    public $search = '';
    public $perPage = 2;
    public $admin = '';

    public $sortBy = 'name';
    public $sortDir = 'DESC';

    public function delete(User $user) {
        $user->delete();
    }

    public function setSortBy($sortBy) {
        $this->sortBy = $sortBy;
    }

    public function render()
    {
        $users = User::search($this->search)
            ->when($this->admin !== '', function($query) {
                $query->where('is_admin', $this->admin);
            })
            ->orderBy($this->sortBy, $this->sortDir)
            ->paginate($this->perPage);
        return view('livewire.users-table',compact('users'));
    }
}

