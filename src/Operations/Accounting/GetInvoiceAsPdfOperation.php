<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves invoices or purchase bills as PDF files
 * @operation getInvoiceAsPdf
 * @tags Accounting
 */
class GetInvoiceAsPdfOperation extends Request
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
        return strtr('/Invoices/{InvoiceID}/pdf', ['{InvoiceID}' => $this->invoiceID]);
    }
}
