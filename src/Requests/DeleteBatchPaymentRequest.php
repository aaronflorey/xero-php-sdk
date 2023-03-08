<?php

namespace Mochaka\XeroSDK\Requests;

use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;

class DeleteBatchPaymentRequest extends Data
{
    /**
     * The Xero generated unique identifier for the bank transaction (read-only)
     * @format uuid
     */
    #[MapName('BatchPaymentID')]
    #[MapOutputName('BatchPaymentID')]
    public string $batchPaymentID;

    /** The status of the batch payment. */
    #[MapName('Status')]
    #[MapOutputName('Status')]
    public string $status;

    /**
     * The Xero generated unique identifier for the bank transaction (read-only)
     */
    public function setBatchPaymentID(string $batchPaymentID): self
    {
        $this->batchPaymentID = $batchPaymentID;
        return $this;
    }

    /**
     * The status of the batch payment.
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }
}
