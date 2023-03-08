<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\BatchPaymentsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetBatchPaymentResponse extends Data
{
    /** @var DataCollection<int, BatchPaymentsData> */
    #[MapName('BatchPayments')]
    #[MapInputName('BatchPayments')]
    #[DataCollectionOf(BatchPaymentsData::class)]
    public ?DataCollection $batchPayments = null;

    /**
     * @return @var DataCollection<int, BatchPaymentsData>
     */
    public function getBatchPayments(): ?DataCollection
    {
        return $this->batchPayments;
    }
}
