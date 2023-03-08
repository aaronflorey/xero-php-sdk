<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetContactGroupResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific contact group by using a unique contact group Id
 * @operation getContactGroup
 * @tags Accounting
 */
class GetContactGroupOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for a Contact Group
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $contactGroupID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $contactGroupID,
    ) {
        $this->contactGroupID = $contactGroupID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/ContactGroups/{ContactGroupID}', ['{ContactGroupID}' => $this->contactGroupID]);
    }

    public function createDtoFromResponse(Response1 $response): GetContactGroupResponse
    {
        return GetContactGroupResponse::from($response->json());
    }
}
