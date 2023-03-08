<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Requests\PostSetupRequest;
use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Sets the chart of accounts, the conversion date and conversion balances
 * @operation postSetup
 * @tags Accounting
 */
class PostSetupOperation extends Request
{
    use HasJsonBody;

    protected Method $method = \Saloon\Enums\Method::POST;
    public PostSetupRequest $requestBody;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        PostSetupRequest $requestBody,
    ) {
        $this->requestBody = $requestBody;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/Setup';
    }

    public function defaultBody(): array
    {
        return $this->requestBody->toArray();
    }
}
