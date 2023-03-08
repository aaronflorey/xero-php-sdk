<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\ReceiptsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UpdateReceiptResponse extends Data
{
    /** @var DataCollection<int, ReceiptsData> */
    #[MapName('Receipts')]
    #[MapInputName('Receipts')]
    #[DataCollectionOf(ReceiptsData::class)]
    public ?DataCollection $receipts = null;

    /**
     * @return @var DataCollection<int, ReceiptsData>
     */
    public function getReceipts(): ?DataCollection
    {
        return $this->receipts;
    }
}
