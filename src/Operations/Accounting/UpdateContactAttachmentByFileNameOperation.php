<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\UpdateContactAttachmentByFileNameResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * @operation updateContactAttachmentByFileName
 * @tags Accounting
 */
class UpdateContactAttachmentByFileNameOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::POST;

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

    public function createDtoFromResponse(Response1 $response): UpdateContactAttachmentByFileNameResponse
    {
        return UpdateContactAttachmentByFileNameResponse::from($response->json());
    }
}
