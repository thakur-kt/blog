<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGatewayContract;
use Illuminate\Http\Request;
use App\Order\OrderDetails;
class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails,PaymentGatewayContract $paymentGateway){

// $paymentGateway= new PaymentGateway();

$order=$orderDetails->all();

dd($paymentGateway->charge(4500));
    }
}
