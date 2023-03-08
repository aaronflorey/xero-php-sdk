<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ConversionBalancesData extends Data
{
    /** The account code for a account */
    #[MapName('AccountCode')]
    #[MapOutputName('AccountCode')]
    public ?string $accountCode = null;

    /**
     * The opening balances of the account. Debits are positive, credits are negative values
     * @format double
     */
    #[MapName('Balance')]
    #[MapOutputName('Balance')]
    public ?int $balance = null;

    /** @var DataCollection<int, BalanceDetailsData> */
    #[MapName('BalanceDetails')]
    #[MapOutputName('BalanceDetails')]
    #[DataCollectionOf(BalanceDetailsData::class)]
    public ?DataCollection $balanceDetails = null;

    /**
     * The account code for a account
     */
    public function setAccountCode(?string $accountCode): ?self
    {
        $this->accountCode = $accountCode;
        return $this;
    }

    /**
     * The opening balances of the account. Debits are positive, credits are negative values
     * The opening balances of the account. Debits are positive, credits are negative values
     * @format double
     */
    public function setBalance(?int $balance): ?self
    {
        $this->balance = $balance;
        return $this;
    }

    /**
     * @var DataCollection<int, BalanceDetailsData>
     */
    public function setBalanceDetails(?DataCollection $balanceDetails): ?self
    {
        $this->balanceDetails = $balanceDetails;
        return $this;
    }
}
