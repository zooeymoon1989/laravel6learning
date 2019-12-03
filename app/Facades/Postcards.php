<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2019/11/1
 * Time: 8:00 AM
 */

namespace App\Facades;


class Postcards
{

    public static function resolveFacade($name)
    {
        return app()->$name;
    }


    public static function __callStatic($method, $arguments)
    {
        // TODO: Implement __callStatic() method.
        return self::resolveFacade('postcard')->$method(...$arguments);
    }

}