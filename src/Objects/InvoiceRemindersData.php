<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class InvoiceRemindersData extends Data
{
    /** setting for on or off */
    #[MapName('Enabled')]
    #[MapInputName('Enabled')]
    public ?bool $enabled = null;

    /**
     * setting for on or off
     * @return setting for on or off
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }
}
