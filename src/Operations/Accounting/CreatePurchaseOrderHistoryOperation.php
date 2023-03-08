<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreatePurchaseOrderHistoryResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Creates a history record for a specific purchase orders
 * @operation createPurchaseOrderHistory
 * @tags Accounting
 */
class CreatePurchaseOrderHistoryOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::PUT;

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
        return strtr('/PurchaseOrders/{PurchaseOrderID}/History', ['{PurchaseOrderID}' => $this->purchaseOrderID]);
    }

    public function createDtoFromResponse(Response1 $response): CreatePurchaseOrderHistoryResponse
    {
        return CreatePurchaseOrderHistoryResponse::from($response->json());
    }
}
