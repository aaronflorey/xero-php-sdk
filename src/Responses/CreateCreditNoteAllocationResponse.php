<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\AllocationsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreateCreditNoteAllocationResponse extends Data
{
    /** @var DataCollection<int, AllocationsData> */
    #[MapName('Allocations')]
    #[MapInputName('Allocations')]
    #[DataCollectionOf(AllocationsData::class)]
    public ?DataCollection $allocations = null;

    /**
     * @return @var DataCollection<int, AllocationsData>
     */
    public function getAllocations(): ?DataCollection
    {
        return $this->allocations;
    }
}
