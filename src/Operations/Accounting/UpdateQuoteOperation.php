<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\UpdateQuoteRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\UpdateQuoteResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Updates a specific quote
 * @operation updateQuote
 * @tags Accounting
 */
class UpdateQuoteOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Unique identifier for an Quote
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $quoteID;
    public UpdateQuoteRequest $requestBody;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $quoteID,
        UpdateQuoteRequest $requestBody,
    ) {
        $this->quoteID = $quoteID;
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Quotes/{QuoteID}', ['{QuoteID}' => $this->quoteID]);
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }

    public function createDtoFromResponse(Response1 $response): UpdateQuoteResponse
    {
        return UpdateQuoteResponse::from($response->json());
    }
}
