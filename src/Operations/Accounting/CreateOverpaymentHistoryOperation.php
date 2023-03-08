<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreateOverpaymentHistoryResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Creates a history record for a specific overpayment
 * @operation createOverpaymentHistory
 * @tags Accounting
 */
class CreateOverpaymentHistoryOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::PUT;

    /**
     * Unique identifier for a Overpayment
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $overpaymentID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $overpaymentID,
    ) {
        $this->overpaymentID = $overpaymentID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Overpayments/{OverpaymentID}/History', ['{OverpaymentID}' => $this->overpaymentID]);
    }

    public function createDtoFromResponse(Response1 $response): CreateOverpaymentHistoryResponse
    {
        return CreateOverpaymentHistoryResponse::from($response->json());
    }
}
