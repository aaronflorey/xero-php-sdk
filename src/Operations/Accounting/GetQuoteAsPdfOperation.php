<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific quote as a PDF file using a unique quote Id
 * @operation getQuoteAsPdf
 * @tags Accounting
 */
class GetQuoteAsPdfOperation extends Request
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
        return strtr('/Quotes/{QuoteID}/pdf', ['{QuoteID}' => $this->quoteID]);
    }
}
