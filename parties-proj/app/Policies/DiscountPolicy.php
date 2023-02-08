<?php

namespace App\Policies;

use App\Models\Discount;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class DiscountPolicy
{
    use HandlesAuthorization;

    public function create(User $user)
    {
        if (
            $user->role == User::IS_ADMIN ||
            $user->role == User::IS_EDITOR
        ) {
            return Response::allow();
        }

        return Response::deny('Недостаточно прав.');
    }

    public function update(User $user, Discount $delivery)
    {
        if (
            $user->role == User::IS_ADMIN ||
            $user->role == User::IS_EDITOR  && (auth()->check() && $delivery->user_id === $user->id)
        ) {
            return Response::allow();
        }

        return Response::deny('Недостаточно прав.');
    }

    public function delete(User $user, Discount $delivery)
    {
        if (
            $user->role == User::IS_ADMIN ||
            $user->role == User::IS_EDITOR  && (auth()->check() && $delivery->user_id === $user->id)
        ) {
            return Response::allow();
        }

        return Response::deny('Недостаточно прав.');
    }
}
