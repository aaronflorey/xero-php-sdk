<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetBankTransactionsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves any spent or received money transactions
 * @operation getBankTransactions
 * @tags Accounting
 */
class GetBankTransactionsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Filter by an any element
     * @example Status=="AUTHORISED"
     */
    public ?string $where = null;

    /**
     * Order by an any element
     * @example Type ASC
     */
    public ?string $order = null;

    /**
     * Up to 100 bank transactions will be returned in a single API call with line items details
     * @example 1
     */
    public ?int $page = null;

    /**
     * e.g. unitdp=4 – (Unit Decimal Places) You can opt in to use four decimal places for unit amounts
     * @example 4
     */
    public ?int $unitdp = null;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/BankTransactions';
    }

    protected function defaultQuery(): array
    {
        return [
        'where' => $this->where,
        'order' => $this->order,
        'page' => $this->page,
        'unitdp' => $this->unitdp,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetBankTransactionsResponse
    {
        return GetBankTransactionsResponse::from($response->json());
    }
}
