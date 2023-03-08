<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\OverpaymentsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetOverpaymentsResponse extends Data
{
    /** @var DataCollection<int, OverpaymentsData> */
    #[MapName('Overpayments')]
    #[MapInputName('Overpayments')]
    #[DataCollectionOf(OverpaymentsData::class)]
    public ?DataCollection $overpayments = null;

    /**
     * @return @var DataCollection<int, OverpaymentsData>
     */
    public function getOverpayments(): ?DataCollection
    {
        return $this->overpayments;
    }
}
