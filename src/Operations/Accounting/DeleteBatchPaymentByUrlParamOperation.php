<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\DeleteBatchPaymentByUrlParamRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\DeleteBatchPaymentByUrlParamResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Updates a specific batch payment for invoices and credit notes
 * @operation deleteBatchPaymentByUrlParam
 * @tags Accounting
 */
class DeleteBatchPaymentByUrlParamOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Unique identifier for BatchPayment
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $batchPaymentID;
    public DeleteBatchPaymentByUrlParamRequest $requestBody;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $batchPaymentID,
        DeleteBatchPaymentByUrlParamRequest $requestBody,
    ) {
        $this->batchPaymentID = $batchPaymentID;
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/BatchPayments/{BatchPaymentID}', ['{BatchPaymentID}' => $this->batchPaymentID]);
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }

    public function createDtoFromResponse(Response1 $response): DeleteBatchPaymentByUrlParamResponse
    {
        return DeleteBatchPaymentByUrlParamResponse::from($response->json());
    }
}
