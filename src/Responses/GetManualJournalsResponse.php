<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\ManualJournalsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetManualJournalsResponse extends Data
{
    /** @var DataCollection<int, ManualJournalsData> */
    #[MapName('ManualJournals')]
    #[MapInputName('ManualJournals')]
    #[DataCollectionOf(ManualJournalsData::class)]
    public ?DataCollection $manualJournals = null;

    /**
     * @return @var DataCollection<int, ManualJournalsData>
     */
    public function getManualJournals(): ?DataCollection
    {
        return $this->manualJournals;
    }
}
