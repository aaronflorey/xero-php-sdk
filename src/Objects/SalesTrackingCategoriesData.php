<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class SalesTrackingCategoriesData extends Data
{
    /** The default sales tracking category name for contacts */
    #[MapName('TrackingCategoryName')]
    #[MapInputName('TrackingCategoryName')]
    public ?string $trackingCategoryName = null;

    /** The default purchase tracking category name for contacts */
    #[MapName('TrackingOptionName')]
    #[MapInputName('TrackingOptionName')]
    public ?string $trackingOptionName = null;

    /**
     * The default sales tracking category name for contacts
     * @return The default sales tracking category name for contacts
     */
    public function getTrackingCategoryName(): ?string
    {
        return $this->trackingCategoryName;
    }

    /**
     * The default purchase tracking category name for contacts
     * @return The default purchase tracking category name for contacts
     */
    public function getTrackingOptionName(): ?string
    {
        return $this->trackingOptionName;
    }
}
