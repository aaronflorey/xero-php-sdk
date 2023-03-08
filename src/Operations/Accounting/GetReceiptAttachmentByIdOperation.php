<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific attachments from a specific expense claim receipts by
 * using a unique attachment Id
 * @operation getReceiptAttachmentById
 * @tags Accounting
 */
class GetReceiptAttachmentByIdOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for a Receipt
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $receiptID;

    /**
     * Unique identifier for Attachment object
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $attachmentID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $receiptID,
        string $attachmentID,
    ) {
        $this->receiptID = $receiptID;
        $this->attachmentID = $attachmentID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Receipts/{ReceiptID}/Attachments/{AttachmentID}', ['{ReceiptID}' => $this->receiptID, '{AttachmentID}' => $this->attachmentID]);
    }
}
