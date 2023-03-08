<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetReportBudgetSummaryResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves report for budget summary
 * @operation getReportBudgetSummary
 * @tags Accounting
 */
class GetReportBudgetSummaryOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * The date for the Bank Summary report e.g. 2018-03-31
     * @example 2019-03-31
     */
    public ?string $date = null;

    /**
     * The number of periods to compare (integer between 1 and 12)
     * @example 2
     */
    public ?int $periods = null;

    /**
     * The period size to compare to (1=month, 3=quarter, 12=year)
     * @example 3
     */
    public ?int $timeframe = null;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/Reports/BudgetSummary';
    }

    protected function defaultQuery(): array
    {
        return [
        'date' => $this->date,
        'periods' => $this->periods,
        'timeframe' => $this->timeframe,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetReportBudgetSummaryResponse
    {
        return GetReportBudgetSummaryResponse::from($response->json());
    }
}
