<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class BudgetsData extends Data
{
    /**
     * Xero identifier
     * @format uuid
     */
    #[MapName('BudgetID')]
    #[MapInputName('BudgetID')]
    public ?string $budgetID = null;

    /** Type of Budget. OVERALL or TRACKING */
    #[MapName('Type')]
    #[MapInputName('Type')]
    public ?string $type = null;

    /** The Budget description */
    #[MapName('Description')]
    #[MapInputName('Description')]
    public ?string $description = null;

    /**
     * UTC timestamp of last update to budget
     * @example /Date(1573755038314)/
     */
    #[MapName('UpdatedDateUTC')]
    #[MapInputName('UpdatedDateUTC')]
    public ?string $updatedDateUTC = null;

    /** @var DataCollection<int, BudgetLinesData> */
    #[MapName('BudgetLines')]
    #[MapInputName('BudgetLines')]
    #[DataCollectionOf(BudgetLinesData::class)]
    public ?DataCollection $budgetLines = null;

    /** @var DataCollection<int, TrackingData> */
    #[MapName('Tracking')]
    #[MapInputName('Tracking')]
    #[DataCollectionOf(TrackingData::class)]
    public ?DataCollection $tracking = null;

    /**
     * Xero identifier
     * @return Xero identifier
     * @format uuid
     * @return Xero identifier
     * @format uuid
     */
    public function getBudgetID(): ?string
    {
        return $this->budgetID;
    }

    /**
     * Type of Budget. OVERALL or TRACKING
     * @return Type of Budget. OVERALL or TRACKING
     * @return Type of Budget. OVERALL or TRACKING
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * The Budget description
     * @return The Budget description
     * @return The Budget description
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * UTC timestamp of last update to budget
     * @return UTC timestamp of last update to budget
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to budget
     * @example /Date(1573755038314)/
     */
    public function getUpdatedDateUTC(): ?string
    {
        return $this->updatedDateUTC;
    }

    /**
     * @return @var DataCollection<int, BudgetLinesData>
     */
    public function getBudgetLines(): ?DataCollection
    {
        return $this->budgetLines;
    }

    /**
     * @return @var DataCollection<int, TrackingData>
     */
    public function getTracking(): ?DataCollection
    {
        return $this->tracking;
    }
}
