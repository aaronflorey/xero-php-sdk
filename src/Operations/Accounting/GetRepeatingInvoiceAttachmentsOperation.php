<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetRepeatingInvoiceAttachmentsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves attachments from a specific repeating invoice
 * @operation getRepeatingInvoiceAttachments
 * @tags Accounting
 */
class GetRepeatingInvoiceAttachmentsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for a Repeating Invoice
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $repeatingInvoiceID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $repeatingInvoiceID,
    ) {
        $this->repeatingInvoiceID = $repeatingInvoiceID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/RepeatingInvoices/{RepeatingInvoiceID}/Attachments', ['{RepeatingInvoiceID}' => $this->repeatingInvoiceID]);
    }

    public function createDtoFromResponse(Response1 $response): GetRepeatingInvoiceAttachmentsResponse
    {
        return GetRepeatingInvoiceAttachmentsResponse::from($response->json());
    }
}
