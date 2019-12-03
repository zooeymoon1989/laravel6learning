<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2019/10/31
 * Time: 11:46 PM
 */

namespace App\Services;


use Illuminate\Support\Facades\Mail;

class PostcardSendingService
{

    private $country;
    private $width;
    private $height;

    public function __construct($country , $width , $height)
    {

        $this->country = $country;
        $this->width = $width;
        $this->height = $height;
    }

    public function hello($message , $email)
    {
        Mail::raw($message , function ($message) use ($email){
            $message->to($email);
        });

        // 通过服务发送邮件
        // $this->country
        // $this->width
        // $this->height

        dump("邮件已发送 内容为:" , $message);
    }

}