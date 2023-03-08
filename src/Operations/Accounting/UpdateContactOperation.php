<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\UpdateContactRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\UpdateContactResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Updates a specific contact in a Xero organisation
 * @operation updateContact
 * @tags Accounting
 */
class UpdateContactOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Unique identifier for a Contact
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $contactID;
    public UpdateContactRequest $requestBody;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $contactID,
        UpdateContactRequest $requestBody,
    ) {
        $this->contactID = $contactID;
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Contacts/{ContactID}', ['{ContactID}' => $this->contactID]);
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }

    public function createDtoFromResponse(Response1 $response): UpdateContactResponse
    {
        return UpdateContactResponse::from($response->json());
    }
}
