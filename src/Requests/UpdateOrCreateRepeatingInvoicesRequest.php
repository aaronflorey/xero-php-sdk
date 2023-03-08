<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\RepeatingInvoicesData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UpdateOrCreateRepeatingInvoicesRequest extends Data
{
    /** @var DataCollection<int, RepeatingInvoicesData> */
    #[MapName('RepeatingInvoices')]
    #[MapOutputName('RepeatingInvoices')]
    #[DataCollectionOf(RepeatingInvoicesData::class)]
    public ?DataCollection $repeatingInvoices = null;

    /**
     * @var DataCollection<int, RepeatingInvoicesData>
     */
    public function setRepeatingInvoices(?DataCollection $repeatingInvoices): ?self
    {
        $this->repeatingInvoices = $repeatingInvoices;
        return $this;
    }
}
