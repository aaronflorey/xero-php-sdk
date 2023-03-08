<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\ExpenseClaimsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreateExpenseClaimsResponse extends Data
{
    /** @var DataCollection<int, ExpenseClaimsData> */
    #[MapName('ExpenseClaims')]
    #[MapInputName('ExpenseClaims')]
    #[DataCollectionOf(ExpenseClaimsData::class)]
    public ?DataCollection $expenseClaims = null;

    /**
     * @return @var DataCollection<int, ExpenseClaimsData>
     */
    public function getExpenseClaims(): ?DataCollection
    {
        return $this->expenseClaims;
    }
}
