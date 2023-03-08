<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetManualJournalsHistoryResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves history for a specific manual journal
 * @operation getManualJournalsHistory
 * @tags Accounting
 */
class GetManualJournalsHistoryOperation extends Request
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
        return strtr('/ManualJournals/{ManualJournalID}/History', ['{ManualJournalID}' => $this->manualJournalID]);
    }

    public function createDtoFromResponse(Response1 $response): GetManualJournalsHistoryResponse
    {
        return GetManualJournalsHistoryResponse::from($response->json());
    }
}
