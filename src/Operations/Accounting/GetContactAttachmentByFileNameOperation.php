<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific attachment from a specific contact by file name
 * @operation getContactAttachmentByFileName
 * @tags Accounting
 */
class GetContactAttachmentByFileNameOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for a Contact
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $contactID;

    /**
     * Name of the attachment
     * @example xero-dev.jpg
     */
    private string $fileName;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $contactID,
        string $fileName,
    ) {
        $this->contactID = $contactID;
        $this->fileName = $fileName;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Contacts/{ContactID}/Attachments/{FileName}', ['{ContactID}' => $this->contactID, '{FileName}' => $this->fileName]);
    }
}
