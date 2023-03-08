<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\CreateRepeatingInvoicesRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreateRepeatingInvoicesResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Creates one or more repeating invoice templates
 * @operation createRepeatingInvoices
 * @tags Accounting
 */
class CreateRepeatingInvoicesOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::PUT;
    public CreateRepeatingInvoicesRequest $requestBody;

    /**
     * If false return 200 OK and mix of successfully created objects and any with validation errors
     * @example 1
     */
    public ?bool $summarizeErrors = null;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        CreateRepeatingInvoicesRequest $requestBody,
    ) {
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/RepeatingInvoices';
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

    public function createDtoFromResponse(Response1 $response): CreateRepeatingInvoicesResponse
    {
        return CreateRepeatingInvoicesResponse::from($response->json());
    }
}
