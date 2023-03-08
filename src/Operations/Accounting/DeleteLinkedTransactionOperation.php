<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Deletes a specific linked transactions (billable expenses)
 * @operation deleteLinkedTransaction
 * @tags Accounting
 */
class DeleteLinkedTransactionOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::DELETE;

    /**
     * Unique identifier for a LinkedTransaction
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $linkedTransactionID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $linkedTransactionID,
    ) {
        $this->linkedTransactionID = $linkedTransactionID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/LinkedTransactions/{LinkedTransactionID}', ['{LinkedTransactionID}' => $this->linkedTransactionID]);
    }
}
