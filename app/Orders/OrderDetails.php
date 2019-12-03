<?php
/**
 * Created by PhpStorm.
 * User: wenba
 * Date: 2019/10/31
 * Time: 7:39 AM
 */

namespace App\Orders;


use App\Billing\BankPaymentGateWay;
use App\Billing\PaymentGateWayContract;

class OrderDetails
{

    /**
     * @var BankPaymentGateWay
     */
    private $paymentGateWay;

    public function __construct(PaymentGateWayContract $paymentGateWay)
    {

        $this->paymentGateWay = $paymentGateWay;
    }


    public function all()
    {
        $this->paymentGateWay->setDiscount(500);
        return [
            "name" => "Zooeymoon",
            "address" => "somewhere I belong"
        ];
    }
}