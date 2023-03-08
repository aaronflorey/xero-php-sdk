<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetInvoiceResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific sales invoice or purchase bill using a unique invoice
 * Id
 * @operation getInvoice
 * @tags Accounting
 */
class GetInvoiceOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for an Invoice
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $invoiceID;

    /**
     * e.g. unitdp=4 – (Unit Decimal Places) You can opt in to use four decimal places for unit amounts
     * @example 4
     */
    public ?int $unitdp = null;

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
        return strtr('/Invoices/{InvoiceID}', ['{InvoiceID}' => $this->invoiceID]);
    }

    protected function defaultQuery(): array
    {
        return [
        'unitdp' => $this->unitdp,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetInvoiceResponse
    {
        return GetInvoiceResponse::from($response->json());
    }
}
