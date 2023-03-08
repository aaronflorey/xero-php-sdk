<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\UpdateBankTransferAttachmentByFileNameResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * @operation updateBankTransferAttachmentByFileName
 * @tags Accounting
 */
class UpdateBankTransferAttachmentByFileNameOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::POST;

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

    public function createDtoFromResponse(Response1 $response): UpdateBankTransferAttachmentByFileNameResponse
    {
        return UpdateBankTransferAttachmentByFileNameResponse::from($response->json());
    }
}
