<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\UpdateRepeatingInvoiceAttachmentByFileNameResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Updates a specific attachment from a specific repeating invoices by file
 * name
 * @operation updateRepeatingInvoiceAttachmentByFileName
 * @tags Accounting
 */
class UpdateRepeatingInvoiceAttachmentByFileNameOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Unique identifier for a Repeating Invoice
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $repeatingInvoiceID;

    /**
     * Name of the attachment
     * @example xero-dev.jpg
     */
    private string $fileName;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $repeatingInvoiceID,
        string $fileName,
    ) {
        $this->repeatingInvoiceID = $repeatingInvoiceID;
        $this->fileName = $fileName;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/RepeatingInvoices/{RepeatingInvoiceID}/Attachments/{FileName}', ['{RepeatingInvoiceID}' => $this->repeatingInvoiceID, '{FileName}' => $this->fileName]);
    }

    public function createDtoFromResponse(Response1 $response): UpdateRepeatingInvoiceAttachmentByFileNameResponse
    {
        return UpdateRepeatingInvoiceAttachmentByFileNameResponse::from($response->json());
    }
}
