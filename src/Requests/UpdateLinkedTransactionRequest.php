<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\LinkedTransactionsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UpdateLinkedTransactionRequest extends Data
{
    /** @var DataCollection<int, LinkedTransactionsData> */
    #[MapName('LinkedTransactions')]
    #[MapOutputName('LinkedTransactions')]
    #[DataCollectionOf(LinkedTransactionsData::class)]
    public ?DataCollection $linkedTransactions = null;

    /**
     * @var DataCollection<int, LinkedTransactionsData>
     */
    public function setLinkedTransactions(?DataCollection $linkedTransactions): ?self
    {
        $this->linkedTransactions = $linkedTransactions;
        return $this;
    }
}
