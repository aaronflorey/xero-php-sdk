<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\JournalsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetJournalsResponse extends Data
{
    /** @var DataCollection<int, JournalsData> */
    #[MapName('Journals')]
    #[MapInputName('Journals')]
    #[DataCollectionOf(JournalsData::class)]
    public ?DataCollection $journals = null;

    /**
     * @return @var DataCollection<int, JournalsData>
     */
    public function getJournals(): ?DataCollection
    {
        return $this->journals;
    }
}
