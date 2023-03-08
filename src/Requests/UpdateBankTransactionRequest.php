<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\BankTransactionsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UpdateBankTransactionRequest extends Data
{
    /** @var DataCollection<int, BankTransactionsData> */
    #[MapName('BankTransactions')]
    #[MapOutputName('BankTransactions')]
    #[DataCollectionOf(BankTransactionsData::class)]
    public ?DataCollection $bankTransactions = null;

    /**
     * @var DataCollection<int, BankTransactionsData>
     */
    public function setBankTransactions(?DataCollection $bankTransactions): ?self
    {
        $this->bankTransactions = $bankTransactions;
        return $this;
    }
}
