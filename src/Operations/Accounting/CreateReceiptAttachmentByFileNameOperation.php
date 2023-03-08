<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreateReceiptAttachmentByFileNameResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Creates an attachment on a specific expense claim receipts by file name
 * @operation createReceiptAttachmentByFileName
 * @tags Accounting
 */
class CreateReceiptAttachmentByFileNameOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::PUT;

    /**
     * Unique identifier for a Receipt
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $receiptID;

    /**
     * Name of the attachment
     * @example xero-dev.jpg
     */
    private string $fileName;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $receiptID,
        string $fileName,
    ) {
        $this->receiptID = $receiptID;
        $this->fileName = $fileName;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Receipts/{ReceiptID}/Attachments/{FileName}', ['{ReceiptID}' => $this->receiptID, '{FileName}' => $this->fileName]);
    }

    public function createDtoFromResponse(Response1 $response): CreateReceiptAttachmentByFileNameResponse
    {
        return CreateReceiptAttachmentByFileNameResponse::from($response->json());
    }
}
