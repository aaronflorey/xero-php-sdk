<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\PaymentsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreatePaymentResponse extends Data
{
    /** @var DataCollection<int, PaymentsData> */
    #[MapName('Payments')]
    #[MapInputName('Payments')]
    #[DataCollectionOf(PaymentsData::class)]
    public ?DataCollection $payments = null;

    /**
     * @return @var DataCollection<int, PaymentsData>
     */
    public function getPayments(): ?DataCollection
    {
        return $this->payments;
    }
}
