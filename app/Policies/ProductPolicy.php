<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Product;
use App\User;

class ProductPolicy
{
    /**
     * Determine if the given user can delete the given task.
     *
     * @param  User  $user
     * @param  Task  $task
     * @return bool
     */
    public function destroy(User $user, Product $product)
    {
        return $user->id === $product->user_id;
    }
}
