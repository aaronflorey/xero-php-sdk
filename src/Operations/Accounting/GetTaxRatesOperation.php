<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetTaxRatesResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves tax rates
 * @operation getTaxRates
 * @tags Accounting
 */
class GetTaxRatesOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Filter by an any element
     * @example Status=="ACTIVE"
     */
    public ?string $where = null;

    /**
     * Order by an any element
     * @example Name ASC
     */
    public ?string $order = null;

    /**
     * Filter by tax type
     * @example INPUT
     */
    public ?string $taxType = null;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/TaxRates';
    }

    protected function defaultQuery(): array
    {
        return [
        'where' => $this->where,
        'order' => $this->order,
        'TaxType' => $this->taxType,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetTaxRatesResponse
    {
        return GetTaxRatesResponse::from($response->json());
    }
}
