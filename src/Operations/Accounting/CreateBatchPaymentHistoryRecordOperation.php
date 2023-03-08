<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreateBatchPaymentHistoryRecordResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Creates a history record for a specific batch payment
 * @operation createBatchPaymentHistoryRecord
 * @tags Accounting
 */
class CreateBatchPaymentHistoryRecordOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::PUT;

    /**
     * Unique identifier for BatchPayment
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $batchPaymentID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $batchPaymentID,
    ) {
        $this->batchPaymentID = $batchPaymentID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/BatchPayments/{BatchPaymentID}/History', ['{BatchPaymentID}' => $this->batchPaymentID]);
    }

    public function createDtoFromResponse(Response1 $response): CreateBatchPaymentHistoryRecordResponse
    {
        return CreateBatchPaymentHistoryRecordResponse::from($response->json());
    }
}
