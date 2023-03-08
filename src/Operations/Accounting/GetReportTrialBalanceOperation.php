<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetReportTrialBalanceResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves report for trial balance
 * @operation getReportTrialBalance
 * @tags Accounting
 */
class GetReportTrialBalanceOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * The date for the Trial Balance report e.g. 2018-03-31
     * @example 2019-10-31
     */
    public ?string $date = null;

    /**
     * Return cash only basis for the Trial Balance report
     * @example true
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
        return '/Reports/TrialBalance';
    }

    protected function defaultQuery(): array
    {
        return [
        'date' => $this->date,
        'paymentsOnly' => $this->paymentsOnly,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetReportTrialBalanceResponse
    {
        return GetReportTrialBalanceResponse::from($response->json());
    }
}
