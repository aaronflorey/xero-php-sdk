<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\InvoicesData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UpdateInvoiceRequest extends Data
{
    /** @var DataCollection<int, InvoicesData> */
    #[MapName('Invoices')]
    #[MapOutputName('Invoices')]
    #[DataCollectionOf(InvoicesData::class)]
    public ?DataCollection $invoices = null;

    /**
     * @var DataCollection<int, InvoicesData>
     */
    public function setInvoices(?DataCollection $invoices): ?self
    {
        $this->invoices = $invoices;
        return $this;
    }
}
