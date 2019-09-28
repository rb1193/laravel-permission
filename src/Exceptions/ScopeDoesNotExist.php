<?php

namespace Spatie\Permission\Exceptions;

use InvalidArgumentException;

class ScopeDoesNotExist extends InvalidArgumentException
{
    /**
     * Create an exception for a named scope
     *
     * @param string $scope
     * @return static
     */
    public static function named(string $scope)
    {
        return new static("There is no scope named `{$scope}`.");
    }
}
