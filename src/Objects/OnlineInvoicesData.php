<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class OnlineInvoicesData extends Data
{
    /** the URL to an online invoice */
    #[MapName('OnlineInvoiceUrl')]
    #[MapInputName('OnlineInvoiceUrl')]
    public ?string $onlineInvoiceUrl = null;

    /**
     * the URL to an online invoice
     * @return the URL to an online invoice
     */
    public function getOnlineInvoiceUrl(): ?string
    {
        return $this->onlineInvoiceUrl;
    }
}
