<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\ContactGroupsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreateContactGroupRequest extends Data
{
    /** @var DataCollection<int, ContactGroupsData> */
    #[MapName('ContactGroups')]
    #[MapOutputName('ContactGroups')]
    #[DataCollectionOf(ContactGroupsData::class)]
    public ?DataCollection $contactGroups = null;

    /**
     * @var DataCollection<int, ContactGroupsData>
     */
    public function setContactGroups(?DataCollection $contactGroups): ?self
    {
        $this->contactGroups = $contactGroups;
        return $this;
    }
}
