<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetBankTransactionAttachmentsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves any attachments from a specific bank transactions
 * @operation getBankTransactionAttachments
 * @tags Accounting
 */
class GetBankTransactionAttachmentsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Xero generated unique identifier for a bank transaction
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $bankTransactionID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $bankTransactionID,
    ) {
        $this->bankTransactionID = $bankTransactionID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/BankTransactions/{BankTransactionID}/Attachments', ['{BankTransactionID}' => $this->bankTransactionID]);
    }

    public function createDtoFromResponse(Response1 $response): GetBankTransactionAttachmentsResponse
    {
        return GetBankTransactionAttachmentsResponse::from($response->json());
    }
}
