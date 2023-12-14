<?php

namespace Eliseekn\LaravelApiResponse;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Eliseekn\LaravelApiResponse\Skeleton\SkeletonClass
 */
class LaravelApiResponseFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-api-response';
    }
}
