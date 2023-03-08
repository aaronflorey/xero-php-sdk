<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\UpdatePurchaseOrderRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\UpdatePurchaseOrderResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Updates a specific purchase order
 * @operation updatePurchaseOrder
 * @tags Accounting
 */
class UpdatePurchaseOrderOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Unique identifier for an Purchase Order
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $purchaseOrderID;
    public UpdatePurchaseOrderRequest $requestBody;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $purchaseOrderID,
        UpdatePurchaseOrderRequest $requestBody,
    ) {
        $this->purchaseOrderID = $purchaseOrderID;
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/PurchaseOrders/{PurchaseOrderID}', ['{PurchaseOrderID}' => $this->purchaseOrderID]);
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }

    public function createDtoFromResponse(Response1 $response): UpdatePurchaseOrderResponse
    {
        return UpdatePurchaseOrderResponse::from($response->json());
    }
}
