<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\EmailInvoiceRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Sends a copy of a specific invoice to related contact via email
 * @operation emailInvoice
 * @tags Accounting
 */
class EmailInvoiceOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Unique identifier for an Invoice
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $invoiceID;
    public EmailInvoiceRequest $requestBody;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $invoiceID,
        EmailInvoiceRequest $requestBody,
    ) {
        $this->invoiceID = $invoiceID;
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Invoices/{InvoiceID}/Email', ['{InvoiceID}' => $this->invoiceID]);
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }
}
