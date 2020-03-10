<?php

namespace ClaudiusNascimento\GentelellaDashboard;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ClaudiusNascimento\GentelellaDashboard\Skeleton\SkeletonClass
 */
class GentelellaDashboardFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'gentelelladashboard';
    }
}
