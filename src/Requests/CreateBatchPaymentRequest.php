<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\BatchPaymentsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreateBatchPaymentRequest extends Data
{
    /** @var DataCollection<int, BatchPaymentsData> */
    #[MapName('BatchPayments')]
    #[MapOutputName('BatchPayments')]
    #[DataCollectionOf(BatchPaymentsData::class)]
    public ?DataCollection $batchPayments = null;

    /**
     * @var DataCollection<int, BatchPaymentsData>
     */
    public function setBatchPayments(?DataCollection $batchPayments): ?self
    {
        $this->batchPayments = $batchPayments;
        return $this;
    }
}
