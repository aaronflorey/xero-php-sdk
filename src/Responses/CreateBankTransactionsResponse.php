<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\BankTransactionsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreateBankTransactionsResponse extends Data
{
    /** @var DataCollection<int, BankTransactionsData> */
    #[MapName('BankTransactions')]
    #[MapInputName('BankTransactions')]
    #[DataCollectionOf(BankTransactionsData::class)]
    public ?DataCollection $bankTransactions = null;

    /**
     * @return @var DataCollection<int, BankTransactionsData>
     */
    public function getBankTransactions(): ?DataCollection
    {
        return $this->bankTransactions;
    }
}
