<?php

namespace Mochaka\XeroSDK\Requests;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;

class CreatePaymentServiceRequest extends Data
{
    #[MapName('PaymentServices')]
    #[MapOutputName('PaymentServices')]
    public ?array $paymentServices = null;

    public function setPaymentServices(?array $paymentServices): ?self
    {
        $this->paymentServices = $paymentServices;
        return $this;
    }
}
