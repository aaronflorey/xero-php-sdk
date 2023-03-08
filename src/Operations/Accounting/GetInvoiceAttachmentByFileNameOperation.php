<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves an attachment from a specific invoice or purchase bill by
 * filename
 * @operation getInvoiceAttachmentByFileName
 * @tags Accounting
 */
class GetInvoiceAttachmentByFileNameOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for an Invoice
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $invoiceID;

    /**
     * Name of the attachment
     * @example xero-dev.jpg
     */
    private string $fileName;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $invoiceID,
        string $fileName,
    ) {
        $this->invoiceID = $invoiceID;
        $this->fileName = $fileName;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Invoices/{InvoiceID}/Attachments/{FileName}', ['{InvoiceID}' => $this->invoiceID, '{FileName}' => $this->fileName]);
    }
}
