<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetOverpaymentResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves a specific overpayment using a unique overpayment Id
 * @operation getOverpayment
 * @tags Accounting
 */
class GetOverpaymentOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

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
        return strtr('/Overpayments/{OverpaymentID}', ['{OverpaymentID}' => $this->overpaymentID]);
    }

    public function createDtoFromResponse(Response1 $response): GetOverpaymentResponse
    {
        return GetOverpaymentResponse::from($response->json());
    }
}
