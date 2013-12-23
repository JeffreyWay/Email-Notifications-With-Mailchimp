<?php namespace Acme\Facades;

use Illuminate\Support\Facades\Facade;

class Notify extends Facade {

    /**
     * Name of binding in IoC container is...
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'notify';
    }

}
