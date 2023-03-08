<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetReportProfitAndLossResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves report for profit and loss
 * @operation getReportProfitAndLoss
 * @tags Accounting
 */
class GetReportProfitAndLossOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * filter by the from date of the report e.g. 2021-02-01
     * @example 2019-10-31
     */
    public ?string $fromDate = null;

    /**
     * filter by the to date of the report e.g. 2021-02-28
     * @example 2019-10-31
     */
    public ?string $toDate = null;

    /**
     * The number of periods to compare (integer between 1 and 12)
     * @example 3
     */
    public ?int $periods = null;

    /**
     * The period size to compare to (MONTH, QUARTER, YEAR)
     * @example MONTH
     */
    public ?string $timeframe = null;

    /**
     * The trackingCategory 1 for the ProfitAndLoss report
     * @example 00000000-0000-0000-0000-000000000000
     */
    public ?string $trackingCategoryID = null;

    /**
     * The trackingCategory 2 for the ProfitAndLoss report
     * @example 00000000-0000-0000-0000-000000000000
     */
    public ?string $trackingCategoryID2 = null;

    /**
     * The tracking option 1 for the ProfitAndLoss report
     * @example 00000000-0000-0000-0000-000000000000
     */
    public ?string $trackingOptionID = null;

    /**
     * The tracking option 2 for the ProfitAndLoss report
     * @example 00000000-0000-0000-0000-000000000000
     */
    public ?string $trackingOptionID2 = null;

    /**
     * Return the standard layout for the ProfitAndLoss report
     * @example true
     */
    public ?bool $standardLayout = null;

    /**
     * Return cash only basis for the ProfitAndLoss report
     * @example false
     */
    public ?bool $paymentsOnly = null;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/Reports/ProfitAndLoss';
    }

    protected function defaultQuery(): array
    {
        return [
        'fromDate' => $this->fromDate,
        'toDate' => $this->toDate,
        'periods' => $this->periods,
        'timeframe' => $this->timeframe,
        'trackingCategoryID' => $this->trackingCategoryID,
        'trackingCategoryID2' => $this->trackingCategoryID2,
        'trackingOptionID' => $this->trackingOptionID,
        'trackingOptionID2' => $this->trackingOptionID2,
        'standardLayout' => $this->standardLayout,
        'paymentsOnly' => $this->paymentsOnly,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetReportProfitAndLossResponse
    {
        return GetReportProfitAndLossResponse::from($response->json());
    }
}
