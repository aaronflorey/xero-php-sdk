<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\UpdateCreditNoteAttachmentByFileNameResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Updates attachments on a specific credit note by file name
 * @operation updateCreditNoteAttachmentByFileName
 * @tags Accounting
 */
class UpdateCreditNoteAttachmentByFileNameOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Unique identifier for a Credit Note
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $creditNoteID;

    /**
     * Name of the attachment
     * @example xero-dev.jpg
     */
    private string $fileName;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $creditNoteID,
        string $fileName,
    ) {
        $this->creditNoteID = $creditNoteID;
        $this->fileName = $fileName;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/CreditNotes/{CreditNoteID}/Attachments/{FileName}', ['{CreditNoteID}' => $this->creditNoteID, '{FileName}' => $this->fileName]);
    }

    public function createDtoFromResponse(Response1 $response): UpdateCreditNoteAttachmentByFileNameResponse
    {
        return UpdateCreditNoteAttachmentByFileNameResponse::from($response->json());
    }
}
