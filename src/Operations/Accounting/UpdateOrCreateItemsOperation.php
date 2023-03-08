<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\UpdateOrCreateItemsRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\UpdateOrCreateItemsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Updates or creates one or more items
 * @operation updateOrCreateItems
 * @tags Accounting
 */
class UpdateOrCreateItemsOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::POST;
    public UpdateOrCreateItemsRequest $requestBody;

    /**
     * If false return 200 OK and mix of successfully created objects and any with validation errors
     * @example 1
     */
    public ?bool $summarizeErrors = null;

    /**
     * e.g. unitdp=4 – (Unit Decimal Places) You can opt in to use four decimal places for unit amounts
     * @example 4
     */
    public ?int $unitdp = null;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        UpdateOrCreateItemsRequest $requestBody,
    ) {
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/Items';
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }

    protected function defaultQuery(): array
    {
        return [
        'summarizeErrors' => $this->summarizeErrors,
        'unitdp' => $this->unitdp,
        ];
    }

    public function createDtoFromResponse(Response1 $response): UpdateOrCreateItemsResponse
    {
        return UpdateOrCreateItemsResponse::from($response->json());
    }
}