<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\CreatePaymentsRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreatePaymentsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Creates multiple payments for invoices or credit notes
 * @operation createPayments
 * @tags Accounting
 */
class CreatePaymentsOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::PUT;
    public CreatePaymentsRequest $requestBody;

    /**
     * If false return 200 OK and mix of successfully created objects and any with validation errors
     * @example 1
     */
    public ?bool $summarizeErrors = null;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        CreatePaymentsRequest $requestBody,
    ) {
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/Payments';
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

    public function createDtoFromResponse(Response1 $response): CreatePaymentsResponse
    {
        return CreatePaymentsResponse::from($response->json());
    }
}
