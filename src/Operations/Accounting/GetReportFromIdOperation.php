<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetReportFromIdResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific report using a unique ReportID
 * @operation getReportFromId
 * @tags Accounting
 */
class GetReportFromIdOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for a Report
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $reportID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $reportID,
    ) {
        $this->reportID = $reportID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Reports/{ReportID}', ['{ReportID}' => $this->reportID]);
    }

    public function createDtoFromResponse(Response1 $response): GetReportFromIdResponse
    {
        return GetReportFromIdResponse::from($response->json());
    }
}
