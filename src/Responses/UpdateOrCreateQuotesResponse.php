<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\QuotesData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UpdateOrCreateQuotesResponse extends Data
{
    /** @var DataCollection<int, QuotesData> */
    #[MapName('Quotes')]
    #[MapInputName('Quotes')]
    #[DataCollectionOf(QuotesData::class)]
    public ?DataCollection $quotes = null;

    /**
     * @return @var DataCollection<int, QuotesData>
     */
    public function getQuotes(): ?DataCollection
    {
        return $this->quotes;
    }
}
