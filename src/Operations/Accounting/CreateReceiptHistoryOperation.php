<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreateReceiptHistoryResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Creates a history record for a specific receipt
 * @operation createReceiptHistory
 * @tags Accounting
 */
class CreateReceiptHistoryOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::PUT;

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

    public function createDtoFromResponse(Response1 $response): CreateReceiptHistoryResponse
    {
        return CreateReceiptHistoryResponse::from($response->json());
    }
}
