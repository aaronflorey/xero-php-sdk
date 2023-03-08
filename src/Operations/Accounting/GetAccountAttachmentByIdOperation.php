<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific attachment from a specific account using a unique
 * attachment Id
 * @operation getAccountAttachmentById
 * @tags Accounting
 */
class GetAccountAttachmentByIdOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for Account object
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $accountID;

    /**
     * Unique identifier for Attachment object
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $attachmentID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $accountID,
        string $attachmentID,
    ) {
        $this->accountID = $accountID;
        $this->attachmentID = $attachmentID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Accounts/{AccountID}/Attachments/{AttachmentID}', ['{AccountID}' => $this->accountID, '{AttachmentID}' => $this->attachmentID]);
    }
}
