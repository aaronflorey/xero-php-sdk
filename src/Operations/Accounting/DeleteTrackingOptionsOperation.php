<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\DeleteTrackingOptionsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Deletes a specific option for a specific tracking category
 * @operation deleteTrackingOptions
 * @tags Accounting
 */
class DeleteTrackingOptionsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::DELETE;

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

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $trackingCategoryID,
        string $trackingOptionID,
    ) {
        $this->trackingCategoryID = $trackingCategoryID;
        $this->trackingOptionID = $trackingOptionID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/TrackingCategories/{TrackingCategoryID}/Options/{TrackingOptionID}', ['{TrackingCategoryID}' => $this->trackingCategoryID, '{TrackingOptionID}' => $this->trackingOptionID]);
    }

    public function createDtoFromResponse(Response1 $response): DeleteTrackingOptionsResponse
    {
        return DeleteTrackingOptionsResponse::from($response->json());
    }
}
