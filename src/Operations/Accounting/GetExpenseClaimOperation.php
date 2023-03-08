<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetExpenseClaimResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific expense claim using a unique expense claim Id
 * @operation getExpenseClaim
 * @tags Accounting
 */
class GetExpenseClaimOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

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
        return strtr('/ExpenseClaims/{ExpenseClaimID}', ['{ExpenseClaimID}' => $this->expenseClaimID]);
    }

    public function createDtoFromResponse(Response1 $response): GetExpenseClaimResponse
    {
        return GetExpenseClaimResponse::from($response->json());
    }
}
