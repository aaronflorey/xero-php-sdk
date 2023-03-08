<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetBrandingThemePaymentServicesResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves the payment services for a specific branding theme
 * @operation getBrandingThemePaymentServices
 * @tags Accounting
 */
class GetBrandingThemePaymentServicesOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Unique identifier for a Branding Theme
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $brandingThemeID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $brandingThemeID,
    ) {
        $this->brandingThemeID = $brandingThemeID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/BrandingThemes/{BrandingThemeID}/PaymentServices', ['{BrandingThemeID}' => $this->brandingThemeID]);
    }

    public function createDtoFromResponse(Response1 $response): GetBrandingThemePaymentServicesResponse
    {
        return GetBrandingThemePaymentServicesResponse::from($response->json());
    }
}
