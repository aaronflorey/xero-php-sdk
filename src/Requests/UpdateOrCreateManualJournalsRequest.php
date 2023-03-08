<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\ManualJournalsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UpdateOrCreateManualJournalsRequest extends Data
{
    /** @var DataCollection<int, ManualJournalsData> */
    #[MapName('ManualJournals')]
    #[MapOutputName('ManualJournals')]
    #[DataCollectionOf(ManualJournalsData::class)]
    public ?DataCollection $manualJournals = null;

    /**
     * @var DataCollection<int, ManualJournalsData>
     */
    public function setManualJournals(?DataCollection $manualJournals): ?self
    {
        $this->manualJournals = $manualJournals;
        return $this;
    }
}
