<?php


namespace App\QueryFilter;

class Active extends Filter
{

    function applyFilter($builder)
    {
        return $builder->where('active' , request('active'));
    }
}
