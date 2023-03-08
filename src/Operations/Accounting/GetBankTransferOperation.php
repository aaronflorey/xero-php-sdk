<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetBankTransferResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves specific bank transfers by using a unique bank transfer Id
 * @operation getBankTransfer
 * @tags Accounting
 */
class GetBankTransferOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

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
        return strtr('/BankTransfers/{BankTransferID}', ['{BankTransferID}' => $this->bankTransferID]);
    }

    public function createDtoFromResponse(Response1 $response): GetBankTransferResponse
    {
        return GetBankTransferResponse::from($response->json());
    }
}
