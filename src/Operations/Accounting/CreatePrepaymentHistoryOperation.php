<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreatePrepaymentHistoryResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Creates a history record for a specific prepayment
 * @operation createPrepaymentHistory
 * @tags Accounting
 */
class CreatePrepaymentHistoryOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::PUT;

    /**
     * Unique identifier for a PrePayment
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $prepaymentID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $prepaymentID,
    ) {
        $this->prepaymentID = $prepaymentID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Prepayments/{PrepaymentID}/History', ['{PrepaymentID}' => $this->prepaymentID]);
    }

    public function createDtoFromResponse(Response1 $response): CreatePrepaymentHistoryResponse
    {
        return CreatePrepaymentHistoryResponse::from($response->json());
    }
}
