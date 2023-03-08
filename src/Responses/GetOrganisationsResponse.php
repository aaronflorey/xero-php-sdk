<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\OrganisationsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetOrganisationsResponse extends Data
{
    /** @var DataCollection<int, OrganisationsData> */
    #[MapName('Organisations')]
    #[MapInputName('Organisations')]
    #[DataCollectionOf(OrganisationsData::class)]
    public ?DataCollection $organisations = null;

    /**
     * @return @var DataCollection<int, OrganisationsData>
     */
    public function getOrganisations(): ?DataCollection
    {
        return $this->organisations;
    }
}
