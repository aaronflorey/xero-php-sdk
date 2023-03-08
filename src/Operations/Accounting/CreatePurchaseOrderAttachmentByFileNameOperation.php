<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreatePurchaseOrderAttachmentByFileNameResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Creates attachment for a specific purchase order
 * @operation createPurchaseOrderAttachmentByFileName
 * @tags Accounting
 */
class CreatePurchaseOrderAttachmentByFileNameOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::PUT;

    /**
     * Unique identifier for an Purchase Order
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $purchaseOrderID;

    /**
     * Name of the attachment
     * @example xero-dev.jpg
     */
    private string $fileName;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $purchaseOrderID,
        string $fileName,
    ) {
        $this->purchaseOrderID = $purchaseOrderID;
        $this->fileName = $fileName;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/PurchaseOrders/{PurchaseOrderID}/Attachments/{FileName}', ['{PurchaseOrderID}' => $this->purchaseOrderID, '{FileName}' => $this->fileName]);
    }

    public function createDtoFromResponse(Response1 $response): CreatePurchaseOrderAttachmentByFileNameResponse
    {
        return CreatePurchaseOrderAttachmentByFileNameResponse::from($response->json());
    }
}
