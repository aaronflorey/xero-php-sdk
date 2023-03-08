<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\DeletePaymentRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\DeletePaymentResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Updates a specific payment for invoices and credit notes
 * @operation deletePayment
 * @tags Accounting
 */
class DeletePaymentOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Unique identifier for a Payment
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $paymentID;
    public DeletePaymentRequest $requestBody;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $paymentID,
        DeletePaymentRequest $requestBody,
    ) {
        $this->paymentID = $paymentID;
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Payments/{PaymentID}', ['{PaymentID}' => $this->paymentID]);
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }

    public function createDtoFromResponse(Response1 $response): DeletePaymentResponse
    {
        return DeletePaymentResponse::from($response->json());
    }
}
