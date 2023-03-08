<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\QuotesData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreateQuotesRequest extends Data
{
    /** @var DataCollection<int, QuotesData> */
    #[MapName('Quotes')]
    #[MapOutputName('Quotes')]
    #[DataCollectionOf(QuotesData::class)]
    public ?DataCollection $quotes = null;

    /**
     * @var DataCollection<int, QuotesData>
     */
    public function setQuotes(?DataCollection $quotes): ?self
    {
        $this->quotes = $quotes;
        return $this;
    }
}
