<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetOnlineInvoiceResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a URL to an online invoice
 * @operation getOnlineInvoice
 * @tags Accounting
 */
class GetOnlineInvoiceOperation extends Request
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
        return strtr('/Invoices/{InvoiceID}/OnlineInvoice', ['{InvoiceID}' => $this->invoiceID]);
    }

    public function createDtoFromResponse(Response1 $response): GetOnlineInvoiceResponse
    {
        return GetOnlineInvoiceResponse::from($response->json());
    }
}
