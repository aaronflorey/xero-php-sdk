<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetCreditNoteHistoryResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves history records of a specific credit note
 * @operation getCreditNoteHistory
 * @tags Accounting
 */
class GetCreditNoteHistoryOperation extends Request
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
        return strtr('/CreditNotes/{CreditNoteID}/History', ['{CreditNoteID}' => $this->creditNoteID]);
    }

    public function createDtoFromResponse(Response1 $response): GetCreditNoteHistoryResponse
    {
        return GetCreditNoteHistoryResponse::from($response->json());
    }
}
