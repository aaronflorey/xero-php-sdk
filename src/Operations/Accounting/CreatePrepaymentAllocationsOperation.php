<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\CreatePrepaymentAllocationsRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreatePrepaymentAllocationsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Allows you to create an Allocation for prepayments
 * @operation createPrepaymentAllocations
 * @tags Accounting
 */
class CreatePrepaymentAllocationsOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::PUT;

    /**
     * Unique identifier for a PrePayment
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $prepaymentID;
    public CreatePrepaymentAllocationsRequest $requestBody;

    /**
     * If false return 200 OK and mix of successfully created objects and any with validation errors
     * @example 1
     */
    public ?bool $summarizeErrors = null;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $prepaymentID,
        CreatePrepaymentAllocationsRequest $requestBody,
    ) {
        $this->prepaymentID = $prepaymentID;
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Prepayments/{PrepaymentID}/Allocations', ['{PrepaymentID}' => $this->prepaymentID]);
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

    public function createDtoFromResponse(Response1 $response): CreatePrepaymentAllocationsResponse
    {
        return CreatePrepaymentAllocationsResponse::from($response->json());
    }
}
