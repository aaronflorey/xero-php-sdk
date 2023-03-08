<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\ReceiptsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreateReceiptRequest extends Data
{
    /** @var DataCollection<int, ReceiptsData> */
    #[MapName('Receipts')]
    #[MapOutputName('Receipts')]
    #[DataCollectionOf(ReceiptsData::class)]
    public ?DataCollection $receipts = null;

    /**
     * @var DataCollection<int, ReceiptsData>
     */
    public function setReceipts(?DataCollection $receipts): ?self
    {
        $this->receipts = $receipts;
        return $this;
    }
}
