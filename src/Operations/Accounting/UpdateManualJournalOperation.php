<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\UpdateManualJournalRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\UpdateManualJournalResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Updates a specific manual journal
 * @operation updateManualJournal
 * @tags Accounting
 */
class UpdateManualJournalOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Unique identifier for a ManualJournal
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $manualJournalID;
    public UpdateManualJournalRequest $requestBody;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $manualJournalID,
        UpdateManualJournalRequest $requestBody,
    ) {
        $this->manualJournalID = $manualJournalID;
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/ManualJournals/{ManualJournalID}', ['{ManualJournalID}' => $this->manualJournalID]);
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }

    public function createDtoFromResponse(Response1 $response): UpdateManualJournalResponse
    {
        return UpdateManualJournalResponse::from($response->json());
    }
}
