<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetManualJournalsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves manual journals
 * @operation getManualJournals
 * @tags Accounting
 */
class GetManualJournalsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Filter by an any element
     * @example Status=="DRAFT"
     */
    public ?string $where = null;

    /**
     * Order by an any element
     * @example Date ASC
     */
    public ?string $order = null;

    /**
     * e.g. page=1 – Up to 100 manual journals will be returned in a single API call with line items shown for each overpayment
     * @example 1
     */
    public ?int $page = null;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/ManualJournals';
    }

    protected function defaultQuery(): array
    {
        return [
        'where' => $this->where,
        'order' => $this->order,
        'page' => $this->page,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetManualJournalsResponse
    {
        return GetManualJournalsResponse::from($response->json());
    }
}
