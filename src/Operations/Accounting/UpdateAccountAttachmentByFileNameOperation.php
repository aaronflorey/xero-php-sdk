<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\UpdateAccountAttachmentByFileNameResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Updates attachment on a specific account by filename
 * @operation updateAccountAttachmentByFileName
 * @tags Accounting
 */
class UpdateAccountAttachmentByFileNameOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Unique identifier for Account object
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $accountID;

    /**
     * Name of the attachment
     * @example xero-dev.jpg
     */
    private string $fileName;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $accountID,
        string $fileName,
    ) {
        $this->accountID = $accountID;
        $this->fileName = $fileName;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Accounts/{AccountID}/Attachments/{FileName}', ['{AccountID}' => $this->accountID, '{FileName}' => $this->fileName]);
    }

    public function createDtoFromResponse(Response1 $response): UpdateAccountAttachmentByFileNameResponse
    {
        return UpdateAccountAttachmentByFileNameResponse::from($response->json());
    }
}
