<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves specific attachments from a specific BankTransaction using a
 * unique attachment Id
 * @operation getBankTransactionAttachmentById
 * @tags Accounting
 */
class GetBankTransactionAttachmentByIdOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Xero generated unique identifier for a bank transaction
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $bankTransactionID;

    /**
     * Unique identifier for Attachment object
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $attachmentID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $bankTransactionID,
        string $attachmentID,
    ) {
        $this->bankTransactionID = $bankTransactionID;
        $this->attachmentID = $attachmentID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/BankTransactions/{BankTransactionID}/Attachments/{AttachmentID}', ['{BankTransactionID}' => $this->bankTransactionID, '{AttachmentID}' => $this->attachmentID]);
    }
}
