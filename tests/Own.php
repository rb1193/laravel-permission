<?php

namespace Spatie\Permission\Test;

use Illuminate\Contracts\Auth\Authenticatable;
use Spatie\Permission\Contracts\Scope;

class Own implements Scope
{
    /**
     * Check the ownership scope
     *
     * @param Authenticatable $user
     * @param mixed $object
     *
     * @return bool
     */
    public function check(Authenticatable $user, $object): bool
    {
        return $object->user_id === $user;
    }
}
