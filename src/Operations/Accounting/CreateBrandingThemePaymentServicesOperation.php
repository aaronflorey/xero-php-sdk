<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\CreateBrandingThemePaymentServicesRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\CreateBrandingThemePaymentServicesResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Creates a new custom payment service for a specific branding theme
 * @operation createBrandingThemePaymentServices
 * @tags Accounting
 */
class CreateBrandingThemePaymentServicesOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Unique identifier for a Branding Theme
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $brandingThemeID;
    public CreateBrandingThemePaymentServicesRequest $requestBody;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $brandingThemeID,
        CreateBrandingThemePaymentServicesRequest $requestBody,
    ) {
        $this->brandingThemeID = $brandingThemeID;
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/BrandingThemes/{BrandingThemeID}/PaymentServices', ['{BrandingThemeID}' => $this->brandingThemeID]);
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }

    public function createDtoFromResponse(Response1 $response): CreateBrandingThemePaymentServicesResponse
    {
        return CreateBrandingThemePaymentServicesResponse::from($response->json());
    }
}
