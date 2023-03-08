<?php

namespace Mochaka\XeroSDK\Requests;

use Mochaka\XeroSDK\Objects\PurchaseOrdersData;
use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Attributes\MapOutputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class CreatePurchaseOrdersRequest extends Data
{
    /** @var DataCollection<int, PurchaseOrdersData> */
    #[MapName('PurchaseOrders')]
    #[MapOutputName('PurchaseOrders')]
    #[DataCollectionOf(PurchaseOrdersData::class)]
    public ?DataCollection $purchaseOrders = null;

    /**
     * @var DataCollection<int, PurchaseOrdersData>
     */
    public function setPurchaseOrders(?DataCollection $purchaseOrders): ?self
    {
        $this->purchaseOrders = $purchaseOrders;
        return $this;
    }
}
