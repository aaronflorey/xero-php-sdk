<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetPaymentsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves payments for invoices and credit notes
 * @operation getPayments
 * @tags Accounting
 */
class GetPaymentsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Filter by an any element
     * @example Status=="AUTHORISED"
     */
    public ?string $where = null;

    /**
     * Order by an any element
     * @example Amount ASC
     */
    public ?string $order = null;

    /**
     * Up to 100 payments will be returned in a single API call
     * @example 1
     */
    public ?int $page = null;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/Payments';
    }

    protected function defaultQuery(): array
    {
        return [
        'where' => $this->where,
        'order' => $this->order,
        'page' => $this->page,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetPaymentsResponse
    {
        return GetPaymentsResponse::from($response->json());
    }
}
