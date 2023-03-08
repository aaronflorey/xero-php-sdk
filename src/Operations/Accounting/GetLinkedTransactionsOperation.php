<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetLinkedTransactionsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves linked transactions (billable expenses)
 * @operation getLinkedTransactions
 * @tags Accounting
 */
class GetLinkedTransactionsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Up to 100 linked transactions will be returned in a single API call. Use the page parameter to specify the page to be returned e.g. page=1.
     * @example 1
     */
    public ?int $page = null;

    /**
     * The Xero identifier for an Linked Transaction
     * @example 00000000-0000-0000-0000-000000000000
     */
    public ?string $linkedTransactionID = null;

    /**
     * Filter by the SourceTransactionID. Get the linked transactions created from a particular ACCPAY invoice
     * @example 00000000-0000-0000-0000-000000000000
     */
    public ?string $sourceTransactionID = null;

    /**
     * Filter by the ContactID. Get all the linked transactions that have been assigned to a particular customer.
     * @example 00000000-0000-0000-0000-000000000000
     */
    public ?string $contactID = null;

    /**
     * Filter by the combination of ContactID and Status. Get  the linked transactions associated to a  customer and with a status
     * @example APPROVED
     */
    public ?string $status = null;

    /**
     * Filter by the TargetTransactionID. Get all the linked transactions allocated to a particular ACCREC invoice
     * @example 00000000-0000-0000-0000-000000000000
     */
    public ?string $targetTransactionID = null;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/LinkedTransactions';
    }

    protected function defaultQuery(): array
    {
        return [
        'page' => $this->page,
        'LinkedTransactionID' => $this->linkedTransactionID,
        'SourceTransactionID' => $this->sourceTransactionID,
        'ContactID' => $this->contactID,
        'Status' => $this->status,
        'TargetTransactionID' => $this->targetTransactionID,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetLinkedTransactionsResponse
    {
        return GetLinkedTransactionsResponse::from($response->json());
    }
}
