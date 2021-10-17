<?php


namespace App\Billing;

interface PaymentGatewayContract{

//interface is a roadmap that how a class needs to be constructed

    public function charge($amount);

    public function setDiscount($discount);
}