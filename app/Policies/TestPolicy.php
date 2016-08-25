<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Testgi;
use App\User;
class TestPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
     public function destroy(User $user, Test $test)
    {
        return $user->id === $test->user_id;
    }
}
