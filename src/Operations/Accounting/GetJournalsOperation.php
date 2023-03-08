<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetJournalsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves journals
 * @operation getJournals
 * @tags Accounting
 */
class GetJournalsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Offset by a specified journal number. e.g. journals with a JournalNumber greater than the offset will be returned
     * @example 10
     */
    public ?int $offset = null;

    /**
     * Filter to retrieve journals on a cash basis. Journals are returned on an accrual basis by default.
     * @example 1
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
        return '/Journals';
    }

    protected function defaultQuery(): array
    {
        return [
        'offset' => $this->offset,
        'paymentsOnly' => $this->paymentsOnly,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetJournalsResponse
    {
        return GetJournalsResponse::from($response->json());
    }
}
