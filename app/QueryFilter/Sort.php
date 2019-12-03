<?php


namespace App\QueryFilter;


class Sort extends Filter
{

    function applyFilter($builder)
    {
        return $builder->orderBy(request('sort'),'asc');
    }
}
