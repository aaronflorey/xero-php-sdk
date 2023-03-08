<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\UpdateTrackingOptionsRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\UpdateTrackingOptionsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Updates a specific option for a specific tracking category
 * @operation updateTrackingOptions
 * @tags Accounting
 */
class UpdateTrackingOptionsOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Unique identifier for a TrackingCategory
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $trackingCategoryID;

    /**
     * Unique identifier for a Tracking Option
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $trackingOptionID;
    public UpdateTrackingOptionsRequest $requestBody;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $trackingCategoryID,
        string $trackingOptionID,
        UpdateTrackingOptionsRequest $requestBody,
    ) {
        $this->trackingCategoryID = $trackingCategoryID;
        $this->trackingOptionID = $trackingOptionID;
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/TrackingCategories/{TrackingCategoryID}/Options/{TrackingOptionID}', ['{TrackingCategoryID}' => $this->trackingCategoryID, '{TrackingOptionID}' => $this->trackingOptionID]);
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }

    public function createDtoFromResponse(Response1 $response): UpdateTrackingOptionsResponse
    {
        return UpdateTrackingOptionsResponse::from($response->json());
    }
}
