<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetPaymentHistoryResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves history records of a specific payment
 * @operation getPaymentHistory
 * @tags Accounting
 */
class GetPaymentHistoryOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for a Payment
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $paymentID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $paymentID,
    ) {
        $this->paymentID = $paymentID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Payments/{PaymentID}/History', ['{PaymentID}' => $this->paymentID]);
    }

    public function createDtoFromResponse(Response1 $response): GetPaymentHistoryResponse
    {
        return GetPaymentHistoryResponse::from($response->json());
    }
}
