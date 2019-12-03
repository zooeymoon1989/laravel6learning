<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2019/10/31
 * Time: 2:14 PM
 */

namespace App\Http\Controllers\View\Composer;


use App\Channel;
use Illuminate\View\View;

class ChannelsComposer
{
    public function compose(View $view)
    {
        $view->with('channels' , Channel::orderBy('name')->get());
    }
}