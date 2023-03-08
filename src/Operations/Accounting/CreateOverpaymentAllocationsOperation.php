<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\CreateOverpaymentAllocationsRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreateOverpaymentAllocationsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Creates a single allocation for a specific overpayment
 * @operation createOverpaymentAllocations
 * @tags Accounting
 */
class CreateOverpaymentAllocationsOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::PUT;

    /**
     * Unique identifier for a Overpayment
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $overpaymentID;
    public CreateOverpaymentAllocationsRequest $requestBody;

    /**
     * If false return 200 OK and mix of successfully created objects and any with validation errors
     * @example 1
     */
    public ?bool $summarizeErrors = null;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $overpaymentID,
        CreateOverpaymentAllocationsRequest $requestBody,
    ) {
        $this->overpaymentID = $overpaymentID;
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Overpayments/{OverpaymentID}/Allocations', ['{OverpaymentID}' => $this->overpaymentID]);
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }

    protected function defaultQuery(): array
    {
        return [
        'summarizeErrors' => $this->summarizeErrors,
        ];
    }

    public function createDtoFromResponse(Response1 $response): CreateOverpaymentAllocationsResponse
    {
        return CreateOverpaymentAllocationsResponse::from($response->json());
    }
}
