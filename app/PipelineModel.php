<?php

namespace App;

use App\QueryFilter\Active;
use App\QueryFilter\MaxCount;
use App\QueryFilter\Sort;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class PipelineModel extends Model
{

    public $table = 'pipelines';
    //
    public static function allPipeline()
    {
        return app(Pipeline::class)
            ->send(self::query())
            ->through([
                Active::class,
                Sort::class,
                MaxCount::class,
            ])
            ->thenReturn()
            ->get();
    }
}
