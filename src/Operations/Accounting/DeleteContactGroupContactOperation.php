<?php

namespace Mochaka\XeroSDK\Operations\Accounting;

use Mochaka\XeroSDK\Resources\AccountingResource;
use Mochaka\XeroSDK\XeroAccountingConnector;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

/**
 * Deletes a specific contact from a contact group using a unique contact Id
 * @operation deleteContactGroupContact
 * @tags Accounting
 */
class DeleteContactGroupContactOperation extends Request
{
    protected Method $method = \Saloon\Enums\Method::DELETE;

    /**
     * Unique identifier for a Contact Group
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $contactGroupID;

    /**
     * Unique identifier for a Contact
     * @example 00000000-0000-0000-0000-000000000000
     */
    private string $contactID;

    public function __construct(
        protected readonly XeroAccountingConnector $connector,
        string $contactGroupID,
        string $contactID,
    ) {
        $this->contactGroupID = $contactGroupID;
        $this->contactID = $contactID;
    }

    public function send(): Response
    {
        return $this->connector->send($this);
    }

    public function resolveEndpoint(): string
    {
        return strtr('/ContactGroups/{ContactGroupID}/Contacts/{ContactID}', ['{ContactGroupID}' => $this->contactGroupID, '{ContactID}' => $this->contactID]);
    }
}
