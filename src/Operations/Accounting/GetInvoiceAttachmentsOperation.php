<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetInvoiceAttachmentsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves attachments for a specific invoice or purchase bill
 * @operation getInvoiceAttachments
 * @tags Accounting
 */
class GetInvoiceAttachmentsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for an Invoice
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $invoiceID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $invoiceID,
    ) {
        $this->invoiceID = $invoiceID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Invoices/{InvoiceID}/Attachments', ['{InvoiceID}' => $this->invoiceID]);
    }

    public function createDtoFromResponse(Response1 $response): GetInvoiceAttachmentsResponse
    {
        return GetInvoiceAttachmentsResponse::from($response->json());
    }
}
