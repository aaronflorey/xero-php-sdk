<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves credit notes as PDF files
 * @operation getCreditNoteAsPdf
 * @tags Accounting
 */
class GetCreditNoteAsPdfOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for a Credit Note
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $creditNoteID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $creditNoteID,
    ) {
        $this->creditNoteID = $creditNoteID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/CreditNotes/{CreditNoteID}/pdf', ['{CreditNoteID}' => $this->creditNoteID]);
    }
}
