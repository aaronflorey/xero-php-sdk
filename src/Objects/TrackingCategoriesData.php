<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class TrackingCategoriesData extends Data
{
    /**
     * The Xero identifier for a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     */
    #[MapName('TrackingCategoryID')]
    #[MapInputName('TrackingCategoryID')]
    public ?string $trackingCategoryID = null;

    /**
     * The Xero identifier for a tracking option e.g. dc54c220-0140-495a-b925-3246adc0075f
     * @format uuid
     */
    #[MapName('TrackingOptionID')]
    #[MapInputName('TrackingOptionID')]
    public ?string $trackingOptionID = null;

    /** The name of the tracking category e.g. Department, Region (max length = 100) */
    #[MapName('Name')]
    #[MapInputName('Name')]
    public ?string $name = null;

    /** The option name of the tracking option e.g. East, West (max length = 100) */
    #[MapName('Option')]
    #[MapInputName('Option')]
    public ?string $option = null;

    /** The status of a tracking category */
    #[MapName('Status')]
    #[MapInputName('Status')]
    public ?string $status = null;

    /** @var DataCollection<int, OptionsData> */
    #[MapName('Options')]
    #[MapInputName('Options')]
    #[DataCollectionOf(OptionsData::class)]
    public ?DataCollection $options = null;

    /**
     * The Xero identifier for a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @return The Xero identifier for a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return The Xero identifier for a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return The Xero identifier for a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return The Xero identifier for a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return The Xero identifier for a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return The Xero identifier for a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     */
    public function getTrackingCategoryID(): ?string
    {
        return $this->trackingCategoryID;
    }

    /**
     * The Xero identifier for a tracking option e.g. dc54c220-0140-495a-b925-3246adc0075f
     * @return The Xero identifier for a tracking option e.g. dc54c220-0140-495a-b925-3246adc0075f
     * @format uuid
     * @return The Xero identifier for a tracking option e.g. dc54c220-0140-495a-b925-3246adc0075f
     * @format uuid
     * @return The Xero identifier for a tracking option e.g. dc54c220-0140-495a-b925-3246adc0075f
     * @format uuid
     * @return The Xero identifier for a tracking option e.g. dc54c220-0140-495a-b925-3246adc0075f
     * @format uuid
     * @return The Xero identifier for a tracking option e.g. dc54c220-0140-495a-b925-3246adc0075f
     * @format uuid
     * @return The Xero identifier for a tracking option e.g. dc54c220-0140-495a-b925-3246adc0075f
     * @format uuid
     */
    public function getTrackingOptionID(): ?string
    {
        return $this->trackingOptionID;
    }

    /**
     * The name of the tracking category e.g. Department, Region (max length = 100)
     * @return The name of the tracking category e.g. Department, Region (max length = 100)
     * @return The name of the tracking category e.g. Department, Region (max length = 100)
     * @return The name of the tracking category e.g. Department, Region (max length = 100)
     * @return The name of the tracking category e.g. Department, Region (max length = 100)
     * @return The name of the tracking category e.g. Department, Region (max length = 100)
     * @return The name of the tracking category e.g. Department, Region (max length = 100)
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The option name of the tracking option e.g. East, West (max length = 100)
     * @return The option name of the tracking option e.g. East, West (max length = 100)
     * @return The option name of the tracking option e.g. East, West (max length = 100)
     * @return The option name of the tracking option e.g. East, West (max length = 100)
     * @return The option name of the tracking option e.g. East, West (max length = 100)
     * @return The option name of the tracking option e.g. East, West (max length = 100)
     * @return The option name of the tracking option e.g. East, West (max length = 100)
     */
    public function getOption(): ?string
    {
        return $this->option;
    }

    /**
     * The status of a tracking category
     * @return The status of a tracking category
     * @return The status of a tracking category
     * @return The status of a tracking category
     * @return The status of a tracking category
     * @return The status of a tracking category
     * @return The status of a tracking category
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @return @var DataCollection<int, OptionsData>
     */
    public function getOptions(): ?DataCollection
    {
        return $this->options;
    }
}
