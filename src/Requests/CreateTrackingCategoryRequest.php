<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\OptionsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreateTrackingCategoryRequest extends Data
{
    /**
     * The Xero identifier for a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     */
    #[MapName('TrackingCategoryID')]
    #[MapOutputName('TrackingCategoryID')]
    public ?string $trackingCategoryID = null;

    /**
     * The Xero identifier for a tracking option e.g. dc54c220-0140-495a-b925-3246adc0075f
     * @format uuid
     */
    #[MapName('TrackingOptionID')]
    #[MapOutputName('TrackingOptionID')]
    public ?string $trackingOptionID = null;

    /** The name of the tracking category e.g. Department, Region (max length = 100) */
    #[MapName('Name')]
    #[MapOutputName('Name')]
    public ?string $name = null;

    /** The option name of the tracking option e.g. East, West (max length = 100) */
    #[MapName('Option')]
    #[MapOutputName('Option')]
    public ?string $option = null;

    /** The status of a tracking category */
    #[MapName('Status')]
    #[MapOutputName('Status')]
    public ?string $status = null;

    /** @var DataCollection<int, OptionsData> */
    #[MapName('Options')]
    #[MapOutputName('Options')]
    #[DataCollectionOf(OptionsData::class)]
    public ?DataCollection $options = null;

    /**
     * The Xero identifier for a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     */
    public function setTrackingCategoryID(?string $trackingCategoryID): ?self
    {
        $this->trackingCategoryID = $trackingCategoryID;
        return $this;
    }

    /**
     * The Xero identifier for a tracking option e.g. dc54c220-0140-495a-b925-3246adc0075f
     */
    public function setTrackingOptionID(?string $trackingOptionID): ?self
    {
        $this->trackingOptionID = $trackingOptionID;
        return $this;
    }

    /**
     * The name of the tracking category e.g. Department, Region (max length = 100)
     */
    public function setName(?string $name): ?self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The option name of the tracking option e.g. East, West (max length = 100)
     */
    public function setOption(?string $option): ?self
    {
        $this->option = $option;
        return $this;
    }

    /**
     * The status of a tracking category
     */
    public function setStatus(?string $status): ?self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @var DataCollection<int, OptionsData>
     */
    public function setOptions(?DataCollection $options): ?self
    {
        $this->options = $options;
        return $this;
    }
}
