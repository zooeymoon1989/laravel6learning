<?php

namespace App\Providers;

use App\Billing\BankPaymentGateWay;
use App\Billing\CreditPaymentGateWay;
use App\Billing\PaymentGateWayContract;
use App\Http\Controllers\View\Composer\ChannelsComposer;
use App\Mixin\StrMixins;
use App\Services\PostcardSendingService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(PaymentGateWayContract::class,function ($app){
            if (request()->has("credit")) {
                return new CreditPaymentGateWay("usd");
            }
            return new BankPaymentGateWay("usd");
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // option 1
        // 使用share方法可以把通用的变量加载出来而不需要在每个controller调用一次
        // 但是这个方法有个问题，每一次访问的时候都会加载注入这个变量使用，我们可能希望在特定的情况下使用这个变量
        //View::share("channels" , Channel::orderBy("name")->get());

        // option 2
        // composer
        // 需要一个制定参数可以是字符串也可以数组用来控制特定的路由来使用这个注入变量
        // 需要制定一个回调函数，函数内制定注入方法
//        View::composer(["channel.index"] ,function ($view){
//            $view->with("channels" , Channel::orderBy("name")->get());
//        });

        // option 3
        // 在控制器中创建一个composer，这个composer可以把想要
        // 创建的ChannelsComposer中必须要有个`compose`方法

//        View::composer(['channel.*'],ChannelsComposer::class);


        $this->app->singleton('postcard' , function (){
            return new PostcardSendingService('us' , 4, 6);
        });


//        Str::macro('partNumber',function ($part){
//            return 'AB-' . substr($part , 0 , 3) . "-" . substr($part , 3);
//        });
        Str::mixin(new StrMixins());

    }
}
