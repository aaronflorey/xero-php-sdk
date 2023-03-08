<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\InvoicesData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UpdateOrCreateInvoicesResponse extends Data
{
    /** @var DataCollection<int, InvoicesData> */
    #[MapName('Invoices')]
    #[MapInputName('Invoices')]
    #[DataCollectionOf(InvoicesData::class)]
    public ?DataCollection $invoices = null;

    /**
     * @return @var DataCollection<int, InvoicesData>
     */
    public function getInvoices(): ?DataCollection
    {
        return $this->invoices;
    }
}
