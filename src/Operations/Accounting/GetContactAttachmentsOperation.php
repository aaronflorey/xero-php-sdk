<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetContactAttachmentsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves attachments for a specific contact in a Xero organisation
 * @operation getContactAttachments
 * @tags Accounting
 */
class GetContactAttachmentsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for a Contact
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $contactID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $contactID,
    ) {
        $this->contactID = $contactID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Contacts/{ContactID}/Attachments', ['{ContactID}' => $this->contactID]);
    }

    public function createDtoFromResponse(Response1 $response): GetContactAttachmentsResponse
    {
        return GetContactAttachmentsResponse::from($response->json());
    }
}
