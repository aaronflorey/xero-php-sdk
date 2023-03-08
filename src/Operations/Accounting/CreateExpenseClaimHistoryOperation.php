<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreateExpenseClaimHistoryResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Creates a history record for a specific expense claim
 * @operation createExpenseClaimHistory
 * @tags Accounting
 */
class CreateExpenseClaimHistoryOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::PUT;

    /**
     * Unique identifier for a ExpenseClaim
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $expenseClaimID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $expenseClaimID,
    ) {
        $this->expenseClaimID = $expenseClaimID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/ExpenseClaims/{ExpenseClaimID}/History', ['{ExpenseClaimID}' => $this->expenseClaimID]);
    }

    public function createDtoFromResponse(Response1 $response): CreateExpenseClaimHistoryResponse
    {
        return CreateExpenseClaimHistoryResponse::from($response->json());
    }
}
