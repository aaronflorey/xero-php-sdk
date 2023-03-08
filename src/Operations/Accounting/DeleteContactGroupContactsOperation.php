<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Deletes all contacts from a specific contact group
 * @operation deleteContactGroupContacts
 * @tags Accounting
 */
class DeleteContactGroupContactsOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::DELETE;

    /**
     * Unique identifier for a Contact Group
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $contactGroupID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $contactGroupID,
    ) {
        $this->contactGroupID = $contactGroupID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/ContactGroups/{ContactGroupID}/Contacts', ['{ContactGroupID}' => $this->contactGroupID]);
    }
}
