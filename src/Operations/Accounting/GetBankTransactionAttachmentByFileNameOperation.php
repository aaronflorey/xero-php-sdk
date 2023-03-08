<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific attachment from a specific bank transaction by
 * filename
 * @operation getBankTransactionAttachmentByFileName
 * @tags Accounting
 */
class GetBankTransactionAttachmentByFileNameOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Xero generated unique identifier for a bank transaction
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $bankTransactionID;

    /**
     * Name of the attachment
     * @example xero-dev.jpg
     */
    private string $fileName;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $bankTransactionID,
        string $fileName,
    ) {
        $this->bankTransactionID = $bankTransactionID;
        $this->fileName = $fileName;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/BankTransactions/{BankTransactionID}/Attachments/{FileName}', ['{BankTransactionID}' => $this->bankTransactionID, '{FileName}' => $this->fileName]);
    }
}
