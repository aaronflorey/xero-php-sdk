<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\BankTransfersData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetBankTransfersResponse extends Data
{
    /** @var DataCollection<int, BankTransfersData> */
    #[MapName('BankTransfers')]
    #[MapInputName('BankTransfers')]
    #[DataCollectionOf(BankTransfersData::class)]
    public ?DataCollection $bankTransfers = null;

    /**
     * @return @var DataCollection<int, BankTransfersData>
     */
    public function getBankTransfers(): ?DataCollection
    {
        return $this->bankTransfers;
    }
}
