<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves specific purchase order as PDF files using a unique purchase
 * order Id
 * @operation getPurchaseOrderAsPdf
 * @tags Accounting
 */
class GetPurchaseOrderAsPdfOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for an Purchase Order
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $purchaseOrderID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $purchaseOrderID,
    ) {
        $this->purchaseOrderID = $purchaseOrderID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/PurchaseOrders/{PurchaseOrderID}/pdf', ['{PurchaseOrderID}' => $this->purchaseOrderID]);
    }
}
