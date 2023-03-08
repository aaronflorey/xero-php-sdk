<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\UpdateRepeatingInvoiceRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\UpdateRepeatingInvoiceResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Deletes a specific repeating invoice template
 * @operation updateRepeatingInvoice
 * @tags Accounting
 */
class UpdateRepeatingInvoiceOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Unique identifier for a Repeating Invoice
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $repeatingInvoiceID;
    public UpdateRepeatingInvoiceRequest $requestBody;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $repeatingInvoiceID,
        UpdateRepeatingInvoiceRequest $requestBody,
    ) {
        $this->repeatingInvoiceID = $repeatingInvoiceID;
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/RepeatingInvoices/{RepeatingInvoiceID}', ['{RepeatingInvoiceID}' => $this->repeatingInvoiceID]);
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }

    public function createDtoFromResponse(Response1 $response): UpdateRepeatingInvoiceResponse
    {
        return UpdateRepeatingInvoiceResponse::from($response->json());
    }
}
