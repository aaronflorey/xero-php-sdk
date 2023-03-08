<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetOrganisationCISSettingsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves the CIS settings for the Xero organistaion.
 * @operation getOrganisationCISSettings
 * @tags Accounting
 */
class GetOrganisationCISSettingsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * The unique Xero identifier for an organisation
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $organisationID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $organisationID,
    ) {
        $this->organisationID = $organisationID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/Organisation/{OrganisationID}/CISSettings', ['{OrganisationID}' => $this->organisationID]);
    }

    public function createDtoFromResponse(Response1 $response): GetOrganisationCISSettingsResponse
    {
        return GetOrganisationCISSettingsResponse::from($response->json());
    }
}
