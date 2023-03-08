<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific attachment from a specific manual journal by file name
 * @operation getManualJournalAttachmentByFileName
 * @tags Accounting
 */
class GetManualJournalAttachmentByFileNameOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

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
}
