<?php
/**
 * Created by PhpStorm.
 * User: Allen
 * Date: 2018/12/31
 * Time: 下午 03:02
 */

namespace App\Repositories;


use App\Task;
use App\User;

class TaskRepository
{
    public function forUser(User $user)
    {
        return Task::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }
}