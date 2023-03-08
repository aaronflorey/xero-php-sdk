<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetAccountAttachmentsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves attachments for a specific accounts by using a unique account Id
 * @operation getAccountAttachments
 * @tags Accounting
 */
class GetAccountAttachmentsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

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
        return strtr('/Accounts/{AccountID}/Attachments', ['{AccountID}' => $this->accountID]);
    }

    public function createDtoFromResponse(Response1 $response): GetAccountAttachmentsResponse
    {
        return GetAccountAttachmentsResponse::from($response->json());
    }
}
