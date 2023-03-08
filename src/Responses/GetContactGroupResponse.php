<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\ContactGroupsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetContactGroupResponse extends Data
{
    /** @var DataCollection<int, ContactGroupsData> */
    #[MapName('ContactGroups')]
    #[MapInputName('ContactGroups')]
    #[DataCollectionOf(ContactGroupsData::class)]
    public ?DataCollection $contactGroups = null;

    /**
     * @return @var DataCollection<int, ContactGroupsData>
     */
    public function getContactGroups(): ?DataCollection
    {
        return $this->contactGroups;
    }
}
