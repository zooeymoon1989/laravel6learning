<?php


namespace App\Mixin;


class StrMixins
{

    public function partNumber()
    {
        return function ($part){
            return 'AB-' . substr($part , 0 , 3) . "-" . substr($part , 3);
        };
    }

    public function prefixNumber()
    {
        return function ($string , $prefix = 'AB-'){
            return $prefix . $string;
        };
    }
}
