<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\OnlineInvoicesData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetOnlineInvoiceResponse extends Data
{
    /** @var DataCollection<int, OnlineInvoicesData> */
    #[MapName('OnlineInvoices')]
    #[MapInputName('OnlineInvoices')]
    #[DataCollectionOf(OnlineInvoicesData::class)]
    public ?DataCollection $onlineInvoices = null;

    /**
     * @return @var DataCollection<int, OnlineInvoicesData>
     */
    public function getOnlineInvoices(): ?DataCollection
    {
        return $this->onlineInvoices;
    }
}
