<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetBudgetsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieve a list of budgets
 * @operation getBudgets
 * @tags Accounting
 */
class GetBudgetsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Filter by BudgetID. Allows you to retrieve a specific individual budget.
     * @example &quot;00000000-0000-0000-0000-000000000000&quot;
     */
    public ?string $iDs = null;

    /**
     * Filter by start date
     * @example 2019-10-31
     */
    public ?string $dateTo = null;

    /**
     * Filter by end date
     * @example 2019-10-31
     */
    public ?string $dateFrom = null;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/Budgets';
    }

    protected function defaultQuery(): array
    {
        return [
        'IDs' => $this->iDs,
        'DateTo' => $this->dateTo,
        'DateFrom' => $this->dateFrom,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetBudgetsResponse
    {
        return GetBudgetsResponse::from($response->json());
    }
}
