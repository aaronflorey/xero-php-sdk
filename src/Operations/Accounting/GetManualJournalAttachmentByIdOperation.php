<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Allows you to retrieve a specific attachment from a specific manual journal
 * using a unique attachment Id
 * @operation getManualJournalAttachmentById
 * @tags Accounting
 */
class GetManualJournalAttachmentByIdOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for a ManualJournal
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $manualJournalID;

    /**
     * Unique identifier for Attachment object
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $attachmentID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $manualJournalID,
        string $attachmentID,
    ) {
        $this->manualJournalID = $manualJournalID;
        $this->attachmentID = $attachmentID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/ManualJournals/{ManualJournalID}/Attachments/{AttachmentID}', ['{ManualJournalID}' => $this->manualJournalID, '{AttachmentID}' => $this->attachmentID]);
    }
}
