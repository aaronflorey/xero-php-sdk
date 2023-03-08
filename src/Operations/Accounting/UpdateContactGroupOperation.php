<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\UpdateContactGroupRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\UpdateContactGroupResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Updates a specific contact group
 * @operation updateContactGroup
 * @tags Accounting
 */
class UpdateContactGroupOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Unique identifier for a Contact Group
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $contactGroupID;
    public UpdateContactGroupRequest $requestBody;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $contactGroupID,
        UpdateContactGroupRequest $requestBody,
    ) {
        $this->contactGroupID = $contactGroupID;
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/ContactGroups/{ContactGroupID}', ['{ContactGroupID}' => $this->contactGroupID]);
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }

    public function createDtoFromResponse(Response1 $response): UpdateContactGroupResponse
    {
        return UpdateContactGroupResponse::from($response->json());
    }
}
