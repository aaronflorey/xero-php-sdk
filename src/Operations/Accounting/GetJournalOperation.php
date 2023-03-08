<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetJournalResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific journal using a unique journal Id.
 * @operation getJournal
 * @tags Accounting
 */
class GetJournalOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for a Journal
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $journalID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $journalID,
    ) {
        $this->journalID = $journalID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Journals/{JournalID}', ['{JournalID}' => $this->journalID]);
    }

    public function createDtoFromResponse(Response1 $response): GetJournalResponse
    {
        return GetJournalResponse::from($response->json());
    }
}
