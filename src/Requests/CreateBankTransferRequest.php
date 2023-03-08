<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\BankTransfersData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreateBankTransferRequest extends Data
{
    /** @var DataCollection<int, BankTransfersData> */
    #[MapName('BankTransfers')]
    #[MapOutputName('BankTransfers')]
    #[DataCollectionOf(BankTransfersData::class)]
    public ?DataCollection $bankTransfers = null;

    /**
     * @var DataCollection<int, BankTransfersData>
     */
    public function setBankTransfers(?DataCollection $bankTransfers): ?self
    {
        $this->bankTransfers = $bankTransfers;
        return $this;
    }
}
