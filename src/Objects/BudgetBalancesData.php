<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class BudgetBalancesData extends Data
{
    /** Period the amount applies to (e.g. “2019-08”) */
    #[MapName('Period')]
    #[MapInputName('Period')]
    public ?string $period = null;

    /**
     * LineItem Quantity
     * @format double
     */
    #[MapName('Amount')]
    #[MapInputName('Amount')]
    public ?int $amount = null;

    /**
     * Budgeted amount
     * @format double
     */
    #[MapName('UnitAmount')]
    #[MapInputName('UnitAmount')]
    public ?int $unitAmount = null;

    /** Any footnotes associated with this balance */
    #[MapName('Notes')]
    #[MapInputName('Notes')]
    public ?string $notes = null;

    /**
     * Period the amount applies to (e.g. “2019-08”)
     * @return Period the amount applies to (e.g. “2019-08”)
     */
    public function getPeriod(): ?string
    {
        return $this->period;
    }

    /**
     * LineItem Quantity
     * @return LineItem Quantity
     * @format double
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Budgeted amount
     * @return Budgeted amount
     * @format double
     */
    public function getUnitAmount(): ?int
    {
        return $this->unitAmount;
    }

    /**
     * Any footnotes associated with this balance
     * @return Any footnotes associated with this balance
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }
}
