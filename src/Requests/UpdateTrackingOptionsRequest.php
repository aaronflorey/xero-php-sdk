<?php

namespace Mochaka\XeroSDK\Requests;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;

class UpdateTrackingOptionsRequest extends Data
{
    /**
     * The Xero identifier for a tracking option e.g. ae777a87-5ef3-4fa0-a4f0-d10e1f13073a
     * @format uuid
     */
    #[MapName('TrackingOptionID')]
    #[MapOutputName('TrackingOptionID')]
    public ?string $trackingOptionID = null;

    /** The name of the tracking option e.g. Marketing, East (max length = 100) */
    #[MapName('Name')]
    #[MapOutputName('Name')]
    public ?string $name = null;

    /** The status of a tracking option */
    #[MapName('Status')]
    #[MapOutputName('Status')]
    public ?string $status = null;

    /**
     * Filter by a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     */
    #[MapName('TrackingCategoryID')]
    #[MapOutputName('TrackingCategoryID')]
    public ?string $trackingCategoryID = null;

    /**
     * The Xero identifier for a tracking option e.g. ae777a87-5ef3-4fa0-a4f0-d10e1f13073a
     */
    public function setTrackingOptionID(?string $trackingOptionID): ?self
    {
        $this->trackingOptionID = $trackingOptionID;
        return $this;
    }

    /**
     * The name of the tracking option e.g. Marketing, East (max length = 100)
     */
    public function setName(?string $name): ?self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The status of a tracking option
     */
    public function setStatus(?string $status): ?self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Filter by a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     */
    public function setTrackingCategoryID(?string $trackingCategoryID): ?self
    {
        $this->trackingCategoryID = $trackingCategoryID;
        return $this;
    }
}
