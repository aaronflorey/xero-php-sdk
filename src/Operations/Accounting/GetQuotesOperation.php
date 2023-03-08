<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetQuotesResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves sales quotes
 * @operation getQuotes
 * @tags Accounting
 */
class GetQuotesOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Filter for quotes after a particular date
     * @example 2019-10-31
     */
    public ?string $dateFrom = null;

    /**
     * Filter for quotes before a particular date
     * @example 2019-10-31
     */
    public ?string $dateTo = null;

    /**
     * Filter for quotes expiring after a particular date
     * @example 2019-10-31
     */
    public ?string $expiryDateFrom = null;

    /**
     * Filter for quotes before a particular date
     * @example 2019-10-31
     */
    public ?string $expiryDateTo = null;

    /**
     * Filter for quotes belonging to a particular contact
     * @example 00000000-0000-0000-0000-000000000000
     */
    public ?string $contactID = null;

    /**
     * Filter for quotes of a particular Status
     * @example DRAFT
     */
    public ?string $status = null;

    /**
     * e.g. page=1 – Up to 100 Quotes will be returned in a single API call with line items shown for each quote
     * @example 1
     */
    public ?int $page = null;

    /**
     * Order by an any element
     * @example Status ASC
     */
    public ?string $order = null;

    /**
     * Filter by quote number (e.g. GET https://.../Quotes?QuoteNumber=QU-0001)
     * @example QU-0001
     */
    public ?string $quoteNumber = null;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/Quotes';
    }

    protected function defaultQuery(): array
    {
        return [
        'DateFrom' => $this->dateFrom,
        'DateTo' => $this->dateTo,
        'ExpiryDateFrom' => $this->expiryDateFrom,
        'ExpiryDateTo' => $this->expiryDateTo,
        'ContactID' => $this->contactID,
        'Status' => $this->status,
        'page' => $this->page,
        'order' => $this->order,
        'QuoteNumber' => $this->quoteNumber,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetQuotesResponse
    {
        return GetQuotesResponse::from($response->json());
    }
}
