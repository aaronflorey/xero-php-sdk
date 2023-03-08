<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetBatchPaymentResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific batch payment using a unique batch payment Id
 * @operation getBatchPayment
 * @tags Accounting
 */
class GetBatchPaymentOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

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
        return strtr('/BatchPayments/{BatchPaymentID}', ['{BatchPaymentID}' => $this->batchPaymentID]);
    }

    public function createDtoFromResponse(Response1 $response): GetBatchPaymentResponse
    {
        return GetBatchPaymentResponse::from($response->json());
    }
}
