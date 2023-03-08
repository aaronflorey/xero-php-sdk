<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetPurchaseOrderResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific purchase order using a unique purchase order Id
 * @operation getPurchaseOrder
 * @tags Accounting
 */
class GetPurchaseOrderOperation extends Request
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
        return strtr('/PurchaseOrders/{PurchaseOrderID}', ['{PurchaseOrderID}' => $this->purchaseOrderID]);
    }

    public function createDtoFromResponse(Response1 $response): GetPurchaseOrderResponse
    {
        return GetPurchaseOrderResponse::from($response->json());
    }
}
