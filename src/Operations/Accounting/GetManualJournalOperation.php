<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetManualJournalResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific manual journal
 * @operation getManualJournal
 * @tags Accounting
 */
class GetManualJournalOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for a ManualJournal
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $manualJournalID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $manualJournalID,
    ) {
        $this->manualJournalID = $manualJournalID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/ManualJournals/{ManualJournalID}', ['{ManualJournalID}' => $this->manualJournalID]);
    }

    public function createDtoFromResponse(Response1 $response): GetManualJournalResponse
    {
        return GetManualJournalResponse::from($response->json());
    }
}
