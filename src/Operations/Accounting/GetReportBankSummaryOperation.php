<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetReportBankSummaryResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves report for bank summary
 * @operation getReportBankSummary
 * @tags Accounting
 */
class GetReportBankSummaryOperation extends Request
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

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/Reports/BankSummary';
    }

    protected function defaultQuery(): array
    {
        return [
        'fromDate' => $this->fromDate,
        'toDate' => $this->toDate,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetReportBankSummaryResponse
    {
        return GetReportBankSummaryResponse::from($response->json());
    }
}
