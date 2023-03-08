<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetReportTenNinetyNineResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieve reports for 1099
 * @operation getReportTenNinetyNine
 * @tags Accounting
 */
class GetReportTenNinetyNineOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * The year of the 1099 report
     * @example 2019
     */
    public ?string $reportYear = null;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/Reports/TenNinetyNine';
    }

    protected function defaultQuery(): array
    {
        return [
        'reportYear' => $this->reportYear,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetReportTenNinetyNineResponse
    {
        return GetReportTenNinetyNineResponse::from($response->json());
    }
}
