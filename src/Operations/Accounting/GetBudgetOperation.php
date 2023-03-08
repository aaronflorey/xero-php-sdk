<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetBudgetResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific budget, which includes budget lines
 * @operation getBudget
 * @tags Accounting
 */
class GetBudgetOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for Budgets
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $budgetID;

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

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $budgetID,
    ) {
        $this->budgetID = $budgetID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Budgets/{BudgetID}', ['{BudgetID}' => $this->budgetID]);
    }

    protected function defaultQuery(): array
    {
        return [
        'DateTo' => $this->dateTo,
        'DateFrom' => $this->dateFrom,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetBudgetResponse
    {
        return GetBudgetResponse::from($response->json());
    }
}
