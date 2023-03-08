<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetItemHistoryResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves history for a specific item
 * @operation getItemHistory
 * @tags Accounting
 */
class GetItemHistoryOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for an Item
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $itemID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $itemID,
    ) {
        $this->itemID = $itemID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Items/{ItemID}/History', ['{ItemID}' => $this->itemID]);
    }

    public function createDtoFromResponse(Response1 $response): GetItemHistoryResponse
    {
        return GetItemHistoryResponse::from($response->json());
    }
}
