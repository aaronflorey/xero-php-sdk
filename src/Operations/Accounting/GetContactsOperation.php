<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\Responses\GetContactsResponse;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Contracts\Response as Response1;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Retrieves all contacts in a Xero organisation
 * @operation getContacts
 * @tags Accounting
 */
class GetContactsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::GET;

    /**
     * Filter by an any element
     * @example ContactStatus==&quot;ACTIVE&quot;
     */
    public ?string $where = null;

    /**
     * Order by an any element
     * @example Name ASC
     */
    public ?string $order = null;

    /**
     * Filter by a comma separated list of ContactIDs. Allows you to retrieve a specific set of contacts in a single call.
     * @example &quot;00000000-0000-0000-0000-000000000000&quot;
     */
    public ?array $iDs = null;

    /**
     * e.g. page=1 - Up to 100 contacts will be returned in a single API call.
     * @example 1
     */
    public ?int $page = null;

    /**
     * e.g. includeArchived=true - Contacts with a status of ARCHIVED will be included in the response
     * @example 1
     */
    public ?bool $includeArchived = null;

    /**
     * Use summaryOnly=true in GET Contacts and Invoices endpoint to retrieve a smaller version of the response object. This returns only lightweight fields, excluding computation-heavy fields from the response, making the API calls quick and efficient.
     * @example 1
     */
    public ?bool $summaryOnly = null;

    /**
     * Search parameter that performs a case-insensitive text search across the Name, FirstName, LastName, ContactNumber and EmailAddress fields.
     * @example Joe Bloggs
     */
    public ?string $searchTerm = null;

    public function __construct(protected readonly XeroAccountingConnector $connector)
    {
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return '/Contacts';
    }

    protected function defaultQuery(): array
    {
        return [
        'where' => $this->where,
        'order' => $this->order,
        'IDs' => $this->iDs,
        'page' => $this->page,
        'includeArchived' => $this->includeArchived,
        'summaryOnly' => $this->summaryOnly,
        'searchTerm' => $this->searchTerm,
        ];
    }

    public function createDtoFromResponse(Response1 $response): GetContactsResponse
    {
        return GetContactsResponse::from($response->json());
    }
}
