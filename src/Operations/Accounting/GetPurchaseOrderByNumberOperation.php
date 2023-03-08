<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetPurchaseOrderByNumberResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific purchase order using purchase order number
 * @operation getPurchaseOrderByNumber
 * @tags Accounting
 */
class GetPurchaseOrderByNumberOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for a PurchaseOrder
     * @example PO1234
     */
    private string $purchaseOrderNumber;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $purchaseOrderNumber,
    ) {
        $this->purchaseOrderNumber = $purchaseOrderNumber;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/PurchaseOrders/{PurchaseOrderNumber}', ['{PurchaseOrderNumber}' => $this->purchaseOrderNumber]);
    }

    public function createDtoFromResponse(Response1 $response): GetPurchaseOrderByNumberResponse
    {
        return GetPurchaseOrderByNumberResponse::from($response->json());
    }
}
