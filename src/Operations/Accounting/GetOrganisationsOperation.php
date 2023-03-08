<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetOrganisationsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves Xero organisation details
 * @operation getOrganisations
 * @tags Accounting
 */
class GetOrganisationsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/Organisation';
    }

    public function createDtoFromResponse(Response1 $response): GetOrganisationsResponse
    {
        return GetOrganisationsResponse::from($response->json());
    }
}
