<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetAccountsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves the full chart of accounts
 * @operation getAccounts
 * @tags Accounting
 */
class GetAccountsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Filter by an any element
     * @example Status==&quot;ACTIVE&quot; AND Type==&quot;BANK&quot;
     */
    public ?string $where = null;

    /**
     * Order by an any element
     * @example Name ASC
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
        return '/Accounts';
    }

    protected function defaultQuery(): array
    {
        return [
        'where' => $this->where,
        'order' => $this->order,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetAccountsResponse
    {
        return GetAccountsResponse::from($response->json());
    }
}
