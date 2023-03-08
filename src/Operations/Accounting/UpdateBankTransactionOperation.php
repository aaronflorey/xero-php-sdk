<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\UpdateBankTransactionRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\UpdateBankTransactionResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Updates a single spent or received money transaction
 * @operation updateBankTransaction
 * @tags Accounting
 */
class UpdateBankTransactionOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Xero generated unique identifier for a bank transaction
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $bankTransactionID;
    public UpdateBankTransactionRequest $requestBody;

    /**
     * e.g. unitdp=4 – (Unit Decimal Places) You can opt in to use four decimal places for unit amounts
     * @example 4
     */
    public ?int $unitdp = null;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $bankTransactionID,
        UpdateBankTransactionRequest $requestBody,
    ) {
        $this->bankTransactionID = $bankTransactionID;
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/BankTransactions/{BankTransactionID}', ['{BankTransactionID}' => $this->bankTransactionID]);
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }

    protected function defaultQuery(): array
    {
        return [
        'unitdp' => $this->unitdp,
        ];
    }

    public function createDtoFromResponse(Response1 $response): UpdateBankTransactionResponse
    {
        return UpdateBankTransactionResponse::from($response->json());
    }
}
