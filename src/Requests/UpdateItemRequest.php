<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\ItemsData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UpdateItemRequest extends Data
{
    /** @var DataCollection<int, ItemsData> */
    #[MapName('Items')]
    #[MapOutputName('Items')]
    #[DataCollectionOf(ItemsData::class)]
    public ?DataCollection $items = null;

    /**
     * @var DataCollection<int, ItemsData>
     */
    public function setItems(?DataCollection $items): ?self
    {
        $this->items = $items;
        return $this;
    }
}
