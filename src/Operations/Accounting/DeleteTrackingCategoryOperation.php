<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\DeleteTrackingCategoryResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Deletes a specific tracking category
 * @operation deleteTrackingCategory
 * @tags Accounting
 */
class DeleteTrackingCategoryOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::DELETE;

    /**
     * Unique identifier for a TrackingCategory
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $trackingCategoryID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $trackingCategoryID,
    ) {
        $this->trackingCategoryID = $trackingCategoryID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/TrackingCategories/{TrackingCategoryID}', ['{TrackingCategoryID}' => $this->trackingCategoryID]);
    }

    public function createDtoFromResponse(Response1 $response): DeleteTrackingCategoryResponse
    {
        return DeleteTrackingCategoryResponse::from($response->json());
    }
}
