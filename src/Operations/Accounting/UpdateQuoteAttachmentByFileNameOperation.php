<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\UpdateQuoteAttachmentByFileNameResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Updates a specific attachment from a specific quote by filename
 * @operation updateQuoteAttachmentByFileName
 * @tags Accounting
 */
class UpdateQuoteAttachmentByFileNameOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Unique identifier for an Quote
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $quoteID;

    /**
     * Name of the attachment
     * @example xero-dev.jpg
     */
    private string $fileName;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $quoteID,
        string $fileName,
    ) {
        $this->quoteID = $quoteID;
        $this->fileName = $fileName;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Quotes/{QuoteID}/Attachments/{FileName}', ['{QuoteID}' => $this->quoteID, '{FileName}' => $this->fileName]);
    }

    public function createDtoFromResponse(Response1 $response): UpdateQuoteAttachmentByFileNameResponse
    {
        return UpdateQuoteAttachmentByFileNameResponse::from($response->json());
    }
}
