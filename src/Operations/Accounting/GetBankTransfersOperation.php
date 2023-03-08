<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetBankTransfersResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves all bank transfers
 * @operation getBankTransfers
 * @tags Accounting
 */
class GetBankTransfersOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Filter by an any element
     * @example HasAttachments==true
     */
    public ?string $where = null;

    /**
     * Order by an any element
     * @example Amount ASC
     */
    public ?string $order = null;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/BankTransfers';
    }

    protected function defaultQuery(): array
    {
        return [
        'where' => $this->where,
        'order' => $this->order,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetBankTransfersResponse
    {
        return GetBankTransfersResponse::from($response->json());
    }
}
