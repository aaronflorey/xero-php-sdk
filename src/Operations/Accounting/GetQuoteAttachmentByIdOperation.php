<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific attachment from a specific quote using a unique
 * attachment Id
 * @operation getQuoteAttachmentById
 * @tags Accounting
 */
class GetQuoteAttachmentByIdOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for an Quote
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $quoteID;

    /**
     * Unique identifier for Attachment object
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $attachmentID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $quoteID,
        string $attachmentID,
    ) {
        $this->quoteID = $quoteID;
        $this->attachmentID = $attachmentID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Quotes/{QuoteID}/Attachments/{AttachmentID}', ['{QuoteID}' => $this->quoteID, '{AttachmentID}' => $this->attachmentID]);
    }
}
