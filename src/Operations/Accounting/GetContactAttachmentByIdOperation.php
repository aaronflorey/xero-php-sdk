<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific attachment from a specific contact using a unique
 * attachment Id
 * @operation getContactAttachmentById
 * @tags Accounting
 */
class GetContactAttachmentByIdOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for a Contact
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $contactID;

    /**
     * Unique identifier for Attachment object
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $attachmentID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $contactID,
        string $attachmentID,
    ) {
        $this->contactID = $contactID;
        $this->attachmentID = $attachmentID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Contacts/{ContactID}/Attachments/{AttachmentID}', ['{ContactID}' => $this->contactID, '{AttachmentID}' => $this->attachmentID]);
    }
}
