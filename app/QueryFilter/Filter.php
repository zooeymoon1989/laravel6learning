<?php


namespace App\QueryFilter;


use Closure;
use Illuminate\Support\Str;

abstract class Filter
{
    public function handle($request, Closure $next)
    {
        if (!request()->has($this->applyName())) {
            return $next($request);
        }

        $builder = $next($request);

        return $this->applyFilter($builder);

    }

    abstract protected function applyFilter($builder);

    protected function applyName()
    {
        return Str::snake(class_basename($this));
    }
}
