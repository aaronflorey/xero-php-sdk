<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreateManualJournalAttachmentByFileNameResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Creates a specific attachment for a specific manual journal by file name
 * @operation createManualJournalAttachmentByFileName
 * @tags Accounting
 */
class CreateManualJournalAttachmentByFileNameOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::PUT;

    /**
     * Unique identifier for a ManualJournal
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $manualJournalID;

    /**
     * Name of the attachment
     * @example xero-dev.jpg
     */
    private string $fileName;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $manualJournalID,
        string $fileName,
    ) {
        $this->manualJournalID = $manualJournalID;
        $this->fileName = $fileName;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/ManualJournals/{ManualJournalID}/Attachments/{FileName}', ['{ManualJournalID}' => $this->manualJournalID, '{FileName}' => $this->fileName]);
    }

    public function createDtoFromResponse(Response1 $response): CreateManualJournalAttachmentByFileNameResponse
    {
        return CreateManualJournalAttachmentByFileNameResponse::from($response->json());
    }
}
