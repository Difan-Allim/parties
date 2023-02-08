<?php

namespace App\Policies;

use App\Models\Document;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class DocumentPolicy
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

    public function update(User $user, Document $delivery)
    {
        if (
            $user->role == User::IS_ADMIN ||
            $user->role == User::IS_EDITOR  && (auth()->check() && $delivery->user_id === $user->id)
        ) {
            return Response::allow();
        }

        return Response::deny('Недостаточно прав.');
    }

    public function delete(User $user, Document $delivery)
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
