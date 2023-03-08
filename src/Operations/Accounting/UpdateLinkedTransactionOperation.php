<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\UpdateLinkedTransactionRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\UpdateLinkedTransactionResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Updates a specific linked transactions (billable expenses)
 * @operation updateLinkedTransaction
 * @tags Accounting
 */
class UpdateLinkedTransactionOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Unique identifier for a LinkedTransaction
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $linkedTransactionID;
    public UpdateLinkedTransactionRequest $requestBody;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $linkedTransactionID,
        UpdateLinkedTransactionRequest $requestBody,
    ) {
        $this->linkedTransactionID = $linkedTransactionID;
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/LinkedTransactions/{LinkedTransactionID}', ['{LinkedTransactionID}' => $this->linkedTransactionID]);
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }

    public function createDtoFromResponse(Response1 $response): UpdateLinkedTransactionResponse
    {
        return UpdateLinkedTransactionResponse::from($response->json());
    }
}
