<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\ItemsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class GetItemsResponse extends Data
{
    /** @var DataCollection<int, ItemsData> */
    #[MapName('Items')]
    #[MapInputName('Items')]
    #[DataCollectionOf(ItemsData::class)]
    public ?DataCollection $items = null;

    /**
     * @return @var DataCollection<int, ItemsData>
     */
    public function getItems(): ?DataCollection
    {
        return $this->items;
    }
}
