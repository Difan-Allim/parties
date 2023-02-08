<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class PurposPolicy
{
    use HandlesAuthorization;

    public function operate(User $user)
    {
        if ($user->role == User::IS_ADMIN) {
            return Response::allow();
        }

        return Response::deny('Недостаточно прав.');
    }
}
