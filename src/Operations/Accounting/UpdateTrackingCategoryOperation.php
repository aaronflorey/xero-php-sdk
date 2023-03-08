<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\UpdateTrackingCategoryRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\UpdateTrackingCategoryResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Updates a specific tracking category
 * @operation updateTrackingCategory
 * @tags Accounting
 */
class UpdateTrackingCategoryOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::POST;

    /**
     * Unique identifier for a TrackingCategory
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $trackingCategoryID;
    public UpdateTrackingCategoryRequest $requestBody;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $trackingCategoryID,
        UpdateTrackingCategoryRequest $requestBody,
    ) {
        $this->trackingCategoryID = $trackingCategoryID;
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/TrackingCategories/{TrackingCategoryID}', ['{TrackingCategoryID}' => $this->trackingCategoryID]);
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }

    public function createDtoFromResponse(Response1 $response): UpdateTrackingCategoryResponse
    {
        return UpdateTrackingCategoryResponse::from($response->json());
    }
}
