<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetContactByContactNumberResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific contact by contact number in a Xero organisation
 * @operation getContactByContactNumber
 * @tags Accounting
 */
class GetContactByContactNumberOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * This field is read only on the Xero contact screen, used to identify contacts in external systems (max length = 50).
     * @example SB2
     */
    private string $contactNumber;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $contactNumber,
    ) {
        $this->contactNumber = $contactNumber;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Contacts/{ContactNumber}', ['{ContactNumber}' => $this->contactNumber]);
    }

    public function createDtoFromResponse(Response1 $response): GetContactByContactNumberResponse
    {
        return GetContactByContactNumberResponse::from($response->json());
    }
}
