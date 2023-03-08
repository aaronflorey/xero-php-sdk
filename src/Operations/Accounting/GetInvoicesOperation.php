<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetInvoicesResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves sales invoices or purchase bills
 * @operation getInvoices
 * @tags Accounting
 */
class GetInvoicesOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Filter by an any element
     * @example Status=="DRAFT"
     */
    public ?string $where = null;

    /**
     * Order by an any element
     * @example InvoiceNumber ASC
     */
    public ?string $order = null;

    /**
     * Filter by a comma-separated list of InvoicesIDs.
     * @example &quot;00000000-0000-0000-0000-000000000000&quot;
     */
    public ?array $iDs = null;

    /**
     * Filter by a comma-separated list of InvoiceNumbers.
     * @example &quot;INV-001&quot;, &quot;INV-002&quot;
     */
    public ?array $invoiceNumbers = null;

    /**
     * Filter by a comma-separated list of ContactIDs.
     * @example &quot;00000000-0000-0000-0000-000000000000&quot;
     */
    public ?array $contactIDs = null;

    /**
     * Filter by a comma-separated list Statuses. For faster response times we recommend using these explicit parameters instead of passing OR conditions into the Where filter.
     * @example &quot;DRAFT&quot;, &quot;SUBMITTED&quot;
     */
    public ?array $statuses = null;

    /**
     * e.g. page=1 – Up to 100 invoices will be returned in a single API call with line items shown for each invoice
     * @example 1
     */
    public ?int $page = null;

    /**
     * e.g. includeArchived=true - Invoices with a status of ARCHIVED will be included in the response
     * @example 1
     */
    public ?bool $includeArchived = null;

    /** When set to true you'll only retrieve Invoices created by your app */
    public ?bool $createdByMyApp = null;

    /**
     * e.g. unitdp=4 – (Unit Decimal Places) You can opt in to use four decimal places for unit amounts
     * @example 4
     */
    public ?int $unitdp = null;

    /**
     * Use summaryOnly=true in GET Contacts and Invoices endpoint to retrieve a smaller version of the response object. This returns only lightweight fields, excluding computation-heavy fields from the response, making the API calls quick and efficient.
     * @example 1
     */
    public ?bool $summaryOnly = null;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/Invoices';
    }

    protected function defaultQuery(): array
    {
        return [
        'where' => $this->where,
        'order' => $this->order,
        'IDs' => $this->iDs,
        'InvoiceNumbers' => $this->invoiceNumbers,
        'ContactIDs' => $this->contactIDs,
        'Statuses' => $this->statuses,
        'page' => $this->page,
        'includeArchived' => $this->includeArchived,
        'createdByMyApp' => $this->createdByMyApp,
        'unitdp' => $this->unitdp,
        'summaryOnly' => $this->summaryOnly,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetInvoicesResponse
    {
        return GetInvoicesResponse::from($response->json());
    }
}
