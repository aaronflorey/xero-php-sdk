<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\HistoryRecordsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetInvoiceHistoryResponse extends Data
{
    /** @var DataCollection<int, HistoryRecordsData> */
    #[MapName('HistoryRecords')]
    #[MapInputName('HistoryRecords')]
    #[DataCollectionOf(HistoryRecordsData::class)]
    public ?DataCollection $historyRecords = null;

    /**
     * @return @var DataCollection<int, HistoryRecordsData>
     */
    public function getHistoryRecords(): ?DataCollection
    {
        return $this->historyRecords;
    }
}
