<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ContactGroupsData extends Data
{
    /** The Name of the contact group. Required when creating a new contact  group */
    #[MapName('Name')]
    #[MapInputName('Name')]
    public ?string $name = null;

    /** The Status of a contact group. To delete a contact group update the status to DELETED. Only contact groups with a status of ACTIVE are returned on GETs. */
    #[MapName('Status')]
    #[MapInputName('Status')]
    public ?string $status = null;

    /**
     * The Xero identifier for an contact group – specified as a string following the endpoint name. e.g. /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     */
    #[MapName('ContactGroupID')]
    #[MapInputName('ContactGroupID')]
    public ?string $contactGroupID = null;

    /** @var DataCollection<int, ContactsData> */
    #[MapName('Contacts')]
    #[MapInputName('Contacts')]
    #[DataCollectionOf(ContactsData::class)]
    public ?DataCollection $contacts = null;

    /**
     * The Name of the contact group. Required when creating a new contact  group
     * @return The Name of the contact group. Required when creating a new contact  group
     * @return The Name of the contact group. Required when creating a new contact  group
     * @return The Name of the contact group. Required when creating a new contact  group
     * @return The Name of the contact group. Required when creating a new contact  group
     * @return The Name of the contact group. Required when creating a new contact  group
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The Status of a contact group. To delete a contact group update the status to DELETED. Only contact groups with a status of ACTIVE are returned on GETs.
     * @return The Status of a contact group. To delete a contact group update the status to DELETED. Only contact groups with a status of ACTIVE are returned on GETs.
     * @return The Status of a contact group. To delete a contact group update the status to DELETED. Only contact groups with a status of ACTIVE are returned on GETs.
     * @return The Status of a contact group. To delete a contact group update the status to DELETED. Only contact groups with a status of ACTIVE are returned on GETs.
     * @return The Status of a contact group. To delete a contact group update the status to DELETED. Only contact groups with a status of ACTIVE are returned on GETs.
     * @return The Status of a contact group. To delete a contact group update the status to DELETED. Only contact groups with a status of ACTIVE are returned on GETs.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * The Xero identifier for an contact group – specified as a string following the endpoint name. e.g. /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @return The Xero identifier for an contact group – specified as a string following the endpoint name. e.g. /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return The Xero identifier for an contact group – specified as a string following the endpoint name. e.g. /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return The Xero identifier for an contact group – specified as a string following the endpoint name. e.g. /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return The Xero identifier for an contact group – specified as a string following the endpoint name. e.g. /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return The Xero identifier for an contact group – specified as a string following the endpoint name. e.g. /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     */
    public function getContactGroupID(): ?string
    {
        return $this->contactGroupID;
    }

    /**
     * @return @var DataCollection<int, ContactsData>
     */
    public function getContacts(): ?DataCollection
    {
        return $this->contacts;
    }

    /**
     * The Name of the contact group. Required when creating a new contact  group
     */
    public function setName(?string $name): ?self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The Status of a contact group. To delete a contact group update the status to DELETED. Only contact groups with a status of ACTIVE are returned on GETs.
     */
    public function setStatus(?string $status): ?self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * The Xero identifier for an contact group – specified as a string following the endpoint name. e.g. /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     */
    public function setContactGroupID(?string $contactGroupID): ?self
    {
        $this->contactGroupID = $contactGroupID;
        return $this;
    }
}
