<?php

namespace Mochaka\XeroSDK\Responses;

use Mochaka\XeroSDK\Objects\PurchaseOrdersData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class UpdatePurchaseOrderResponse extends Data
{
    /** @var DataCollection<int, PurchaseOrdersData> */
    #[MapName('PurchaseOrders')]
    #[MapInputName('PurchaseOrders')]
    #[DataCollectionOf(PurchaseOrdersData::class)]
    public ?DataCollection $purchaseOrders = null;

    /**
     * @return @var DataCollection<int, PurchaseOrdersData>
     */
    public function getPurchaseOrders(): ?DataCollection
    {
        return $this->purchaseOrders;
    }
}
