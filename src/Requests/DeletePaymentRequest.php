<?php

namespace Mochaka\XeroSDK\Requests;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;

class DeletePaymentRequest extends Data
{
    /** The status of the payment. */
    #[MapName('Status')]
    #[MapOutputName('Status')]
    public string $status;

    /**
     * The status of the payment.
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }
}
