<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreateInvoiceAttachmentByFileNameResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Creates an attachment for a specific invoice or purchase bill by filename
 * @operation createInvoiceAttachmentByFileName
 * @tags Accounting
 */
class CreateInvoiceAttachmentByFileNameOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::PUT;

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

    /**
     * Allows an attachment to be seen by the end customer within their online invoice
     * @example 1
     */
    public ?bool $includeOnline = null;

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

    protected function defaultQuery(): array
    {
        return [
        'IncludeOnline' => $this->includeOnline,
        ];
    }

    public function createDtoFromResponse(Response1 $response): CreateInvoiceAttachmentByFileNameResponse
    {
        return CreateInvoiceAttachmentByFileNameResponse::from($response->json());
    }
}
