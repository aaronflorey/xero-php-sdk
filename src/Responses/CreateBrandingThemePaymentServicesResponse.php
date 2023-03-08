<?php

namespace Mochaka\XeroSDK\Responses;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class CreateBrandingThemePaymentServicesResponse extends Data
{
    #[MapName('PaymentServices')]
    #[MapInputName('PaymentServices')]
    public ?array $paymentServices = null;

    public function getPaymentServices(): ?array
    {
        return $this->paymentServices;
    }
}
