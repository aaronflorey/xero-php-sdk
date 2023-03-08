<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetBrandingThemesResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves all the branding themes
 * @operation getBrandingThemes
 * @tags Accounting
 */
class GetBrandingThemesOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/BrandingThemes';
    }

    public function createDtoFromResponse(Response1 $response): GetBrandingThemesResponse
    {
        return GetBrandingThemesResponse::from($response->json());
    }
}
