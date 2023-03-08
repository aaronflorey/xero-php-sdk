<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\DeleteAccountResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Deletes a chart of accounts
 * @operation deleteAccount
 * @tags Accounting
 */
class DeleteAccountOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::DELETE;

    /**
     * Unique identifier for Account object
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $accountID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $accountID,
    ) {
        $this->accountID = $accountID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Accounts/{AccountID}', ['{AccountID}' => $this->accountID]);
    }

    public function createDtoFromResponse(Response1 $response): DeleteAccountResponse
    {
        return DeleteAccountResponse::from($response->json());
    }
}
