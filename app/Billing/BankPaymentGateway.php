<?php

namespace App\Billing;

class BankPaymentGateway implements PaymentGatewayContract
{
    private $currency;
    private $discount;

    public function __construct($currency)
    {
        $this->currency=$currency;
    }


    public function setDiscount($discount)
    {
        $this->discount=$discount;
    }

    public function charge($amount)
    {


        return [
            'original_amount'=>$amount,
            'discounted_amount'=>$amount-$this->discount,
            'currency'=> $this->currency,
            'discount'=> $this->discount
    ];
    }
}
