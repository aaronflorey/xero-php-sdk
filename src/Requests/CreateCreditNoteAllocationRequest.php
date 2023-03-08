<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\AllocationsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreateCreditNoteAllocationRequest extends Data
{
    /** @var DataCollection<int, AllocationsData> */
    #[MapName('Allocations')]
    #[MapOutputName('Allocations')]
    #[DataCollectionOf(AllocationsData::class)]
    public ?DataCollection $allocations = null;

    /**
     * @var DataCollection<int, AllocationsData>
     */
    public function setAllocations(?DataCollection $allocations): ?self
    {
        $this->allocations = $allocations;
        return $this;
    }
}
