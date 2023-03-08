<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\PrepaymentsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetPrepaymentResponse extends Data
{
    /** @var DataCollection<int, PrepaymentsData> */
    #[MapName('Prepayments')]
    #[MapInputName('Prepayments')]
    #[DataCollectionOf(PrepaymentsData::class)]
    public ?DataCollection $prepayments = null;

    /**
     * @return @var DataCollection<int, PrepaymentsData>
     */
    public function getPrepayments(): ?DataCollection
    {
        return $this->prepayments;
    }
}
