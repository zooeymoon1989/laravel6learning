<?php

namespace App\Http\Controllers;

use App\PipelineModel;
use Illuminate\Http\Request;

class PipelineController extends Controller
{
    public function index()
    {
        $pipelines = PipelineModel::allPipeline();

        return view('pipeline.index', compact('pipelines'));
    }
}
