<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreateBankTransferAttachmentByFileNameResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * @operation createBankTransferAttachmentByFileName
 * @tags Accounting
 */
class CreateBankTransferAttachmentByFileNameOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::PUT;

    /**
     * Xero generated unique identifier for a bank transfer
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $bankTransferID;

    /**
     * Name of the attachment
     * @example xero-dev.jpg
     */
    private string $fileName;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $bankTransferID,
        string $fileName,
    ) {
        $this->bankTransferID = $bankTransferID;
        $this->fileName = $fileName;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/BankTransfers/{BankTransferID}/Attachments/{FileName}', ['{BankTransferID}' => $this->bankTransferID, '{FileName}' => $this->fileName]);
    }

    public function createDtoFromResponse(Response1 $response): CreateBankTransferAttachmentByFileNameResponse
    {
        return CreateBankTransferAttachmentByFileNameResponse::from($response->json());
    }
}
