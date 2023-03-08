<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetReceiptHistoryResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a history record for a specific receipt
 * @operation getReceiptHistory
 * @tags Accounting
 */
class GetReceiptHistoryOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for a Receipt
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $receiptID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $receiptID,
    ) {
        $this->receiptID = $receiptID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Receipts/{ReceiptID}/History', ['{ReceiptID}' => $this->receiptID]);
    }

    public function createDtoFromResponse(Response1 $response): GetReceiptHistoryResponse
    {
        return GetReceiptHistoryResponse::from($response->json());
    }
}
