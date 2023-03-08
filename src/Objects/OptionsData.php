<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class OptionsData extends Data
{
    /**
     * The Xero identifier for a tracking option e.g. ae777a87-5ef3-4fa0-a4f0-d10e1f13073a
     * @format uuid
     */
    #[MapName('TrackingOptionID')]
    #[MapInputName('TrackingOptionID')]
    public ?string $trackingOptionID = null;

    /** The name of the tracking option e.g. Marketing, East (max length = 100) */
    #[MapName('Name')]
    #[MapInputName('Name')]
    public ?string $name = null;

    /** The status of a tracking option */
    #[MapName('Status')]
    #[MapInputName('Status')]
    public ?string $status = null;

    /**
     * Filter by a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     */
    #[MapName('TrackingCategoryID')]
    #[MapInputName('TrackingCategoryID')]
    public ?string $trackingCategoryID = null;

    /**
     * The Xero identifier for a tracking option e.g. ae777a87-5ef3-4fa0-a4f0-d10e1f13073a
     * @return The Xero identifier for a tracking option e.g. ae777a87-5ef3-4fa0-a4f0-d10e1f13073a
     * @format uuid
     * @return The Xero identifier for a tracking option e.g. ae777a87-5ef3-4fa0-a4f0-d10e1f13073a
     * @format uuid
     * @return The Xero identifier for a tracking option e.g. ae777a87-5ef3-4fa0-a4f0-d10e1f13073a
     * @format uuid
     * @return The Xero identifier for a tracking option e.g. ae777a87-5ef3-4fa0-a4f0-d10e1f13073a
     * @format uuid
     * @return The Xero identifier for a tracking option e.g. ae777a87-5ef3-4fa0-a4f0-d10e1f13073a
     * @format uuid
     */
    public function getTrackingOptionID(): ?string
    {
        return $this->trackingOptionID;
    }

    /**
     * The name of the tracking option e.g. Marketing, East (max length = 100)
     * @return The name of the tracking option e.g. Marketing, East (max length = 100)
     * @return The name of the tracking option e.g. Marketing, East (max length = 100)
     * @return The name of the tracking option e.g. Marketing, East (max length = 100)
     * @return The name of the tracking option e.g. Marketing, East (max length = 100)
     * @return The name of the tracking option e.g. Marketing, East (max length = 100)
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The status of a tracking option
     * @return The status of a tracking option
     * @return The status of a tracking option
     * @return The status of a tracking option
     * @return The status of a tracking option
     * @return The status of a tracking option
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Filter by a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @return Filter by a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return Filter by a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return Filter by a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return Filter by a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return Filter by a tracking category e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     */
    public function getTrackingCategoryID(): ?string
    {
        return $this->trackingCategoryID;
    }

    /**
     * The Xero identifier for a tracking option e.g. ae777a87-5ef3-4fa0-a4f0-d10e1f13073a
     * @format uuid
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
     * @format uuid
     */
    public function setTrackingCategoryID(?string $trackingCategoryID): ?self
    {
        $this->trackingCategoryID = $trackingCategoryID;
        return $this;
    }
}
