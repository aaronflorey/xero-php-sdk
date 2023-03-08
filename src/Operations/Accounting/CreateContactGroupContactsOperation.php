<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\CreateContactGroupContactsRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreateContactGroupContactsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Creates contacts to a specific contact group
 * @operation createContactGroupContacts
 * @tags Accounting
 */
class CreateContactGroupContactsOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::PUT;

    /**
     * Unique identifier for a Contact Group
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $contactGroupID;
    public CreateContactGroupContactsRequest $requestBody;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $contactGroupID,
        CreateContactGroupContactsRequest $requestBody,
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
        return strtr('/ContactGroups/{ContactGroupID}/Contacts', ['{ContactGroupID}' => $this->contactGroupID]);
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }

    public function createDtoFromResponse(Response1 $response): CreateContactGroupContactsResponse
    {
        return CreateContactGroupContactsResponse::from($response->json());
    }
}
