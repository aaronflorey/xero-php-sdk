<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific attachment from a specific invoices or purchase bills
 * by using a unique attachment Id
 * @operation getInvoiceAttachmentById
 * @tags Accounting
 */
class GetInvoiceAttachmentByIdOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for an Invoice
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $invoiceID;

    /**
     * Unique identifier for Attachment object
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $attachmentID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $invoiceID,
        string $attachmentID,
    ) {
        $this->invoiceID = $invoiceID;
        $this->attachmentID = $attachmentID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Invoices/{InvoiceID}/Attachments/{AttachmentID}', ['{InvoiceID}' => $this->invoiceID, '{AttachmentID}' => $this->attachmentID]);
    }
}
