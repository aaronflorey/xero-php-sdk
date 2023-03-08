<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetReportExecutiveSummaryResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves report for executive summary
 * @operation getReportExecutiveSummary
 * @tags Accounting
 */
class GetReportExecutiveSummaryOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * The date for the Bank Summary report e.g. 2018-03-31
     * @example 2019-03-31
     */
    public ?string $date = null;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/Reports/ExecutiveSummary';
    }

    protected function defaultQuery(): array
    {
        return [
        'date' => $this->date,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetReportExecutiveSummaryResponse
    {
        return GetReportExecutiveSummaryResponse::from($response->json());
    }
}
