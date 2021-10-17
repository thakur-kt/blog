<?php

namespace App\Billing;

class CreditPaymentGateway implements PaymentGatewayContract
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
$discounted_amt=$amount-$this->discount;
$fee=$discounted_amt*0.03;
        return [
            'original_amount'=>$amount,
            'discounted_amount'=>$discounted_amt,
            'currency'=> $this->currency,
            'discount'=> $this->discount,
            'fee'=>$fee
    ];
    }
}
