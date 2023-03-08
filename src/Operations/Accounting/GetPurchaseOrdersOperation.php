<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetPurchaseOrdersResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves purchase orders
 * @operation getPurchaseOrders
 * @tags Accounting
 */
class GetPurchaseOrdersOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Filter by purchase order status
     * @example SUBMITTED
     */
    public ?string $status = null;

    /**
     * Filter by purchase order date (e.g. GET https://.../PurchaseOrders?DateFrom=2015-12-01&DateTo=2015-12-31
     * @example 2019-12-01
     */
    public ?string $dateFrom = null;

    /**
     * Filter by purchase order date (e.g. GET https://.../PurchaseOrders?DateFrom=2015-12-01&DateTo=2015-12-31
     * @example 2019-12-31
     */
    public ?string $dateTo = null;

    /**
     * Order by an any element
     * @example PurchaseOrderNumber ASC
     */
    public ?string $order = null;

    /**
     * To specify a page, append the page parameter to the URL e.g. ?page=1. If there are 100 records in the response you will need to check if there is any more data by fetching the next page e.g ?page=2 and continuing this process until no more results are returned.
     * @example 1
     */
    public ?int $page = null;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/PurchaseOrders';
    }

    protected function defaultQuery(): array
    {
        return [
        'Status' => $this->status,
        'DateFrom' => $this->dateFrom,
        'DateTo' => $this->dateTo,
        'order' => $this->order,
        'page' => $this->page,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetPurchaseOrdersResponse
    {
        return GetPurchaseOrdersResponse::from($response->json());
    }
}
