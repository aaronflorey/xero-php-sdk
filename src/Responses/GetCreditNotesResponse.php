<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\CreditNotesData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetCreditNotesResponse extends Data
{
    /** @var DataCollection<int, CreditNotesData> */
    #[MapName('CreditNotes')]
    #[MapInputName('CreditNotes')]
    #[DataCollectionOf(CreditNotesData::class)]
    public ?DataCollection $creditNotes = null;

    /**
     * @return @var DataCollection<int, CreditNotesData>
     */
    public function getCreditNotes(): ?DataCollection
    {
        return $this->creditNotes;
    }
}
