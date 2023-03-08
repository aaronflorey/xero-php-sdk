<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreateBankTransferHistoryRecordResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Creates a history record for a specific bank transfer
 * @operation createBankTransferHistoryRecord
 * @tags Accounting
 */
class CreateBankTransferHistoryRecordOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::PUT;

    /**
     * Xero generated unique identifier for a bank transfer
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $bankTransferID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $bankTransferID,
    ) {
        $this->bankTransferID = $bankTransferID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/BankTransfers/{BankTransferID}/History', ['{BankTransferID}' => $this->bankTransferID]);
    }

    public function createDtoFromResponse(Response1 $response): CreateBankTransferHistoryRecordResponse
    {
        return CreateBankTransferHistoryRecordResponse::from($response->json());
    }
}
