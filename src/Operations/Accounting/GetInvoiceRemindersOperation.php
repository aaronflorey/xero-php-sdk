<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetInvoiceRemindersResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves invoice reminder settings
 * @operation getInvoiceReminders
 * @tags Accounting
 */
class GetInvoiceRemindersOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/InvoiceReminders/Settings';
    }

    public function createDtoFromResponse(Response1 $response): GetInvoiceRemindersResponse
    {
        return GetInvoiceRemindersResponse::from($response->json());
    }
}
