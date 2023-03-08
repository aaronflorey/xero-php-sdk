<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\CreditNotesData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UpdateOrCreateCreditNotesRequest extends Data
{
    /** @var DataCollection<int, CreditNotesData> */
    #[MapName('CreditNotes')]
    #[MapOutputName('CreditNotes')]
    #[DataCollectionOf(CreditNotesData::class)]
    public ?DataCollection $creditNotes = null;

    /**
     * @var DataCollection<int, CreditNotesData>
     */
    public function setCreditNotes(?DataCollection $creditNotes): ?self
    {
        $this->creditNotes = $creditNotes;
        return $this;
    }
}
