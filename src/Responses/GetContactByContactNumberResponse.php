<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\ContactsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetContactByContactNumberResponse extends Data
{
    /** @var DataCollection<int, ContactsData> */
    #[MapName('Contacts')]
    #[MapInputName('Contacts')]
    #[DataCollectionOf(ContactsData::class)]
    public ?DataCollection $contacts = null;

    /**
     * @return @var DataCollection<int, ContactsData>
     */
    public function getContacts(): ?DataCollection
    {
        return $this->contacts;
    }
}
