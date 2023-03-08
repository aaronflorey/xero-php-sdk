<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetUserResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific user
 * @operation getUser
 * @tags Accounting
 */
class GetUserOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for a User
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $userID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $userID,
    ) {
        $this->userID = $userID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Users/{UserID}', ['{UserID}' => $this->userID]);
    }

    public function createDtoFromResponse(Response1 $response): GetUserResponse
    {
        return GetUserResponse::from($response->json());
    }
}
