<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreateRepeatingInvoiceHistoryResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Creates a  history record for a specific repeating invoice
 * @operation createRepeatingInvoiceHistory
 * @tags Accounting
 */
class CreateRepeatingInvoiceHistoryOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::PUT;

    /**
     * Unique identifier for a Repeating Invoice
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $repeatingInvoiceID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $repeatingInvoiceID,
    ) {
        $this->repeatingInvoiceID = $repeatingInvoiceID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/RepeatingInvoices/{RepeatingInvoiceID}/History', ['{RepeatingInvoiceID}' => $this->repeatingInvoiceID]);
    }

    public function createDtoFromResponse(Response1 $response): CreateRepeatingInvoiceHistoryResponse
    {
        return CreateRepeatingInvoiceHistoryResponse::from($response->json());
    }
}
