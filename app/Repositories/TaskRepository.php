<?php

namespace App\Repositories;

use App\User;

class TaskRepository 
{
    public function forUser(User $user)
    {
        return $user->tasks()
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}