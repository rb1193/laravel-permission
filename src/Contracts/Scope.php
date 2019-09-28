<?php

namespace Spatie\Permission\Contracts;

use Illuminate\Contracts\Auth\Authenticatable;

interface Scope
{
    /**
     * Apply the permission scope
     *
     * @param \Illuminate\Contracts\Auth\Authenticatable $user
     * @param mixed $object
     *
     * @return boolean
     */
    public function check(Authenticatable $user, $object): bool;
}
