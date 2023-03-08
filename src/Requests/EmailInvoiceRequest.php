<?php

namespace Mochaka\XeroSDK\Requests;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;

class EmailInvoiceRequest extends Data
{
    /** Need at least one field to create an empty JSON payload */
    #[MapName('Status')]
    #[MapOutputName('Status')]
    public ?string $status = null;

    /**
     * Need at least one field to create an empty JSON payload
     */
    public function setStatus(?string $status): ?self
    {
        $this->status = $status;
        return $this;
    }
}
