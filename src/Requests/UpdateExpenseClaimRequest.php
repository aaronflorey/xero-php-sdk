<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\ExpenseClaimsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UpdateExpenseClaimRequest extends Data
{
    /** @var DataCollection<int, ExpenseClaimsData> */
    #[MapName('ExpenseClaims')]
    #[MapOutputName('ExpenseClaims')]
    #[DataCollectionOf(ExpenseClaimsData::class)]
    public ?DataCollection $expenseClaims = null;

    /**
     * @var DataCollection<int, ExpenseClaimsData>
     */
    public function setExpenseClaims(?DataCollection $expenseClaims): ?self
    {
        $this->expenseClaims = $expenseClaims;
        return $this;
    }
}
