<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\RepeatingInvoicesData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UpdateOrCreateRepeatingInvoicesResponse extends Data
{
    /** @var DataCollection<int, RepeatingInvoicesData> */
    #[MapName('RepeatingInvoices')]
    #[MapInputName('RepeatingInvoices')]
    #[DataCollectionOf(RepeatingInvoicesData::class)]
    public ?DataCollection $repeatingInvoices = null;

    /**
     * @return @var DataCollection<int, RepeatingInvoicesData>
     */
    public function getRepeatingInvoices(): ?DataCollection
    {
        return $this->repeatingInvoices;
    }
}
