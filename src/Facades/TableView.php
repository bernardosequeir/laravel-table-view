<?php

namespace Bernardosequeir\LaravelTableView\Facades;

use Illuminate\Support\Facades\Facade;

class TableView extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Bernardosequeir\LaravelTableView\laravelTableView';
    }
}
