<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2019/10/30
 * Time: 11:00 PM
 */

namespace App\ForTest;


class FooBar
{

    public function foo()
    {
        return "hello world";
    }

    public function bar()
    {
        return "hello bar";
    }

    public function __construct()
    {
        echo "i am calling";
    }

}