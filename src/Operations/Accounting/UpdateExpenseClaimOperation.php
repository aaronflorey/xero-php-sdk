<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\UpdateExpenseClaimRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\UpdateExpenseClaimResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Updates a specific expense claims
 * @operation updateExpenseClaim
 * @tags Accounting
 */
class UpdateExpenseClaimOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Unique identifier for a ExpenseClaim
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $expenseClaimID;
    public UpdateExpenseClaimRequest $requestBody;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $expenseClaimID,
        UpdateExpenseClaimRequest $requestBody,
    ) {
        $this->expenseClaimID = $expenseClaimID;
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/ExpenseClaims/{ExpenseClaimID}', ['{ExpenseClaimID}' => $this->expenseClaimID]);
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }

    public function createDtoFromResponse(Response1 $response): UpdateExpenseClaimResponse
    {
        return UpdateExpenseClaimResponse::from($response->json());
    }
}
