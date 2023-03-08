<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\InvoiceRemindersData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetInvoiceRemindersResponse extends Data
{
    /** @var DataCollection<int, InvoiceRemindersData> */
    #[MapName('InvoiceReminders')]
    #[MapInputName('InvoiceReminders')]
    #[DataCollectionOf(InvoiceRemindersData::class)]
    public ?DataCollection $invoiceReminders = null;

    /**
     * @return @var DataCollection<int, InvoiceRemindersData>
     */
    public function getInvoiceReminders(): ?DataCollection
    {
        return $this->invoiceReminders;
    }
}
