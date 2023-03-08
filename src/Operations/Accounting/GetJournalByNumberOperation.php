<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetJournalByNumberResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific journal using a unique journal number.
 * @operation getJournalByNumber
 * @tags Accounting
 */
class GetJournalByNumberOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /** Number of a Journal */
    private int $journalNumber;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        int $journalNumber,
    ) {
        $this->journalNumber = $journalNumber;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Journals/{JournalNumber}', ['{JournalNumber}' => $this->journalNumber]);
    }

    public function createDtoFromResponse(Response1 $response): GetJournalByNumberResponse
    {
        return GetJournalByNumberResponse::from($response->json());
    }
}
