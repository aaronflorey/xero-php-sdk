<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetReportBalanceSheetResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves report for balancesheet
 * @operation getReportBalanceSheet
 * @tags Accounting
 */
class GetReportBalanceSheetOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * The date of the Balance Sheet report
     * @example 2019-11-01
     */
    public ?string $date = null;

    /**
     * The number of periods for the Balance Sheet report
     * @example 3
     */
    public ?int $periods = null;

    /**
     * The period size to compare to (MONTH, QUARTER, YEAR)
     * @example MONTH
     */
    public ?string $timeframe = null;

    /**
     * The tracking option 1 for the Balance Sheet report
     * @example 00000000-0000-0000-0000-000000000000
     */
    public ?string $trackingOptionID1 = null;

    /**
     * The tracking option 2 for the Balance Sheet report
     * @example 00000000-0000-0000-0000-000000000000
     */
    public ?string $trackingOptionID2 = null;

    /**
     * The standard layout boolean for the Balance Sheet report
     * @example 1
     */
    public ?bool $standardLayout = null;

    /** return a cash basis for the Balance Sheet report */
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
        return '/Reports/BalanceSheet';
    }

    protected function defaultQuery(): array
    {
        return [
        'date' => $this->date,
        'periods' => $this->periods,
        'timeframe' => $this->timeframe,
        'trackingOptionID1' => $this->trackingOptionID1,
        'trackingOptionID2' => $this->trackingOptionID2,
        'standardLayout' => $this->standardLayout,
        'paymentsOnly' => $this->paymentsOnly,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetReportBalanceSheetResponse
    {
        return GetReportBalanceSheetResponse::from($response->json());
    }
}
