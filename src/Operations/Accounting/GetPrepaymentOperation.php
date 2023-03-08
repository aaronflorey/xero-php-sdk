<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetPrepaymentResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Allows you to retrieve a specified prepayments
 * @operation getPrepayment
 * @tags Accounting
 */
class GetPrepaymentOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

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
        return strtr('/Prepayments/{PrepaymentID}', ['{PrepaymentID}' => $this->prepaymentID]);
    }

    public function createDtoFromResponse(Response1 $response): GetPrepaymentResponse
    {
        return GetPrepaymentResponse::from($response->json());
    }
}
