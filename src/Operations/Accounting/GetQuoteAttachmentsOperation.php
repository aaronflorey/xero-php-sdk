<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetQuoteAttachmentsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves attachments for a specific quote
 * @operation getQuoteAttachments
 * @tags Accounting
 */
class GetQuoteAttachmentsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for an Quote
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $quoteID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $quoteID,
    ) {
        $this->quoteID = $quoteID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Quotes/{QuoteID}/Attachments', ['{QuoteID}' => $this->quoteID]);
    }

    public function createDtoFromResponse(Response1 $response): GetQuoteAttachmentsResponse
    {
        return GetQuoteAttachmentsResponse::from($response->json());
    }
}
