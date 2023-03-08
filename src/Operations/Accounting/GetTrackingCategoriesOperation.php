<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetTrackingCategoriesResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves tracking categories and options
 * @operation getTrackingCategories
 * @tags Accounting
 */
class GetTrackingCategoriesOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Filter by an any element
     * @example Status=="ACTIVE"
     */
    public ?string $where = null;

    /**
     * Order by an any element
     * @example Name ASC
     */
    public ?string $order = null;

    /**
     * e.g. includeArchived=true - Categories and options with a status of ARCHIVED will be included in the response
     * @example 1
     */
    public ?bool $includeArchived = null;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/TrackingCategories';
    }

    protected function defaultQuery(): array
    {
        return [
        'where' => $this->where,
        'order' => $this->order,
        'includeArchived' => $this->includeArchived,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetTrackingCategoriesResponse
    {
        return GetTrackingCategoriesResponse::from($response->json());
    }
}
