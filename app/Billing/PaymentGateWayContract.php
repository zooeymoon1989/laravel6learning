<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2019/10/31
 * Time: 8:01 AM
 */

namespace App\Billing;

interface PaymentGateWayContract
{
    public function charge($amount);

    public function setDiscount($discount);
}