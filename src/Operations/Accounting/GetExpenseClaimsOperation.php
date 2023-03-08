<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetExpenseClaimsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves expense claims
 * @operation getExpenseClaims
 * @tags Accounting
 */
class GetExpenseClaimsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Filter by an any element
     * @example Status=="SUBMITTED"
     */
    public ?string $where = null;

    /**
     * Order by an any element
     * @example Status ASC
     */
    public ?string $order = null;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/ExpenseClaims';
    }

    protected function defaultQuery(): array
    {
        return [
        'where' => $this->where,
        'order' => $this->order,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetExpenseClaimsResponse
    {
        return GetExpenseClaimsResponse::from($response->json());
    }
}
