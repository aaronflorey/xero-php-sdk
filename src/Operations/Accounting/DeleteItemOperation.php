<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Deletes a specific item
 * @operation deleteItem
 * @tags Accounting
 */
class DeleteItemOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::DELETE;

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
        return strtr('/Items/{ItemID}', ['{ItemID}' => $this->itemID]);
    }
}
