<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\ContactsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreateContactsRequest extends Data
{
    /** @var DataCollection<int, ContactsData> */
    #[MapName('Contacts')]
    #[MapOutputName('Contacts')]
    #[DataCollectionOf(ContactsData::class)]
    public ?DataCollection $contacts = null;

    /**
     * @var DataCollection<int, ContactsData>
     */
    public function setContacts(?DataCollection $contacts): ?self
    {
        $this->contacts = $contacts;
        return $this;
    }
}
