<?php

namespace ECardona\CMSBuilder\Facades;

use Illuminate\Support\Facades\Facade;

class CMSBuilder extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cmsbuilder';
    }
}
