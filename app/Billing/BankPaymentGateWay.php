<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2019/10/30
 * Time: 11:14 PM
 */

namespace App\Billing;


use Illuminate\Support\Str;

class BankPaymentGateWay implements PaymentGateWayContract
{

    private $currency;
    private $discount;

    public function __construct($currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
    }

    public function charge($amount)
    {
        return [
            "amount" => $amount - $this->discount,
            "confirm_number" => Str::random(),
            "currency" => $this->currency,
            "discount" => $this->discount
        ];
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
}