<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetOrganisationActionsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a list of the key actions your app has permission to perform in
 * the connected Xero organisation.
 * @operation getOrganisationActions
 * @tags Accounting
 */
class GetOrganisationActionsOperation extends Request
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
        return '/Organisation/Actions';
    }

    public function createDtoFromResponse(Response1 $response): GetOrganisationActionsResponse
    {
        return GetOrganisationActionsResponse::from($response->json());
    }
}
