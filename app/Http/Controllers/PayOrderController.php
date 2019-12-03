<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGateWayContract;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    //
    public function store(OrderDetails $orderDetail, PaymentGateWayContract $payment)
    {
        $order = $orderDetail->all();
        dd($payment->charge("2500"));
    }
}
