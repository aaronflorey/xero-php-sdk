<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\DeleteBatchPaymentRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\DeleteBatchPaymentResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Updates a specific batch payment for invoices and credit notes
 * @operation deleteBatchPayment
 * @tags Accounting
 */
class DeleteBatchPaymentOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::POST;
    public DeleteBatchPaymentRequest $requestBody;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        DeleteBatchPaymentRequest $requestBody,
    ) {
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/BatchPayments';
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }

    public function createDtoFromResponse(Response1 $response): DeleteBatchPaymentResponse
    {
        return DeleteBatchPaymentResponse::from($response->json());
    }
}
