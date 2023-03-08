<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\LinkedTransactionsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UpdateLinkedTransactionResponse extends Data
{
    /** @var DataCollection<int, LinkedTransactionsData> */
    #[MapName('LinkedTransactions')]
    #[MapInputName('LinkedTransactions')]
    #[DataCollectionOf(LinkedTransactionsData::class)]
    public ?DataCollection $linkedTransactions = null;

    /**
     * @return @var DataCollection<int, LinkedTransactionsData>
     */
    public function getLinkedTransactions(): ?DataCollection
    {
        return $this->linkedTransactions;
    }
}
