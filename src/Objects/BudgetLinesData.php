<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class BudgetLinesData extends Data
{
    /**
     * See Accounts
     * @format uuid
     */
    #[MapName('AccountID')]
    #[MapInputName('AccountID')]
    public ?string $accountID = null;

    /**
     * See Accounts
     * @example 090
     */
    #[MapName('AccountCode')]
    #[MapInputName('AccountCode')]
    public ?string $accountCode = null;

    /** @var DataCollection<int, BudgetBalancesData> */
    #[MapName('BudgetBalances')]
    #[MapInputName('BudgetBalances')]
    #[DataCollectionOf(BudgetBalancesData::class)]
    public ?DataCollection $budgetBalances = null;

    /**
     * See Accounts
     * @return See Accounts
     * @format uuid
     */
    public function getAccountID(): ?string
    {
        return $this->accountID;
    }

    /**
     * See Accounts
     * @return See Accounts
     * @example 090
     */
    public function getAccountCode(): ?string
    {
        return $this->accountCode;
    }

    /**
     * @return @var DataCollection<int, BudgetBalancesData>
     */
    public function getBudgetBalances(): ?DataCollection
    {
        return $this->budgetBalances;
    }
}
