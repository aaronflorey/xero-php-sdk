<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\BudgetsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetBudgetsResponse extends Data
{
    /** @var DataCollection<int, BudgetsData> */
    #[MapName('Budgets')]
    #[MapInputName('Budgets')]
    #[DataCollectionOf(BudgetsData::class)]
    public ?DataCollection $budgets = null;

    /**
     * @return @var DataCollection<int, BudgetsData>
     */
    public function getBudgets(): ?DataCollection
    {
        return $this->budgets;
    }
}
