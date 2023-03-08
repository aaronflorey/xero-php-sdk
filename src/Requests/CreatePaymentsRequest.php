<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\PaymentsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreatePaymentsRequest extends Data
{
    /** @var DataCollection<int, PaymentsData> */
    #[MapName('Payments')]
    #[MapOutputName('Payments')]
    #[DataCollectionOf(PaymentsData::class)]
    public ?DataCollection $payments = null;

    /**
     * @var DataCollection<int, PaymentsData>
     */
    public function setPayments(?DataCollection $payments): ?self
    {
        $this->payments = $payments;
        return $this;
    }
}
