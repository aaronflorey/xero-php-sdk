<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\TrackingCategoriesData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetTrackingCategoryResponse extends Data
{
    /** @var DataCollection<int, TrackingCategoriesData> */
    #[MapName('TrackingCategories')]
    #[MapInputName('TrackingCategories')]
    #[DataCollectionOf(TrackingCategoriesData::class)]
    public ?DataCollection $trackingCategories = null;

    /**
     * @return @var DataCollection<int, TrackingCategoriesData>
     */
    public function getTrackingCategories(): ?DataCollection
    {
        return $this->trackingCategories;
    }
}
