<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class UsersData extends Data
{
    /**
     * Xero identifier
     * @format uuid
     */
    #[MapName('UserID')]
    #[MapInputName('UserID')]
    public ?string $userID = null;

    /** Email address of user */
    #[MapName('EmailAddress')]
    #[MapInputName('EmailAddress')]
    public ?string $emailAddress = null;

    /** First name of user */
    #[MapName('FirstName')]
    #[MapInputName('FirstName')]
    public ?string $firstName = null;

    /** Last name of user */
    #[MapName('LastName')]
    #[MapInputName('LastName')]
    public ?string $lastName = null;

    /**
     * Timestamp of last change to user
     * @example /Date(1573755038314)/
     */
    #[MapName('UpdatedDateUTC')]
    #[MapInputName('UpdatedDateUTC')]
    public ?string $updatedDateUTC = null;

    /** Boolean to indicate if user is the subscriber */
    #[MapName('IsSubscriber')]
    #[MapInputName('IsSubscriber')]
    public ?bool $isSubscriber = null;

    /** User role that defines permissions in Xero and via API (READONLY, INVOICEONLY, STANDARD, FINANCIALADVISER, etc) */
    #[MapName('OrganisationRole')]
    #[MapInputName('OrganisationRole')]
    public ?string $organisationRole = null;

    /**
     * Xero identifier
     * @return Xero identifier
     * @format uuid
     * @return Xero identifier
     * @format uuid
     */
    public function getUserID(): ?string
    {
        return $this->userID;
    }

    /**
     * Email address of user
     * @return Email address of user
     * @return Email address of user
     */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    /**
     * First name of user
     * @return First name of user
     * @return First name of user
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Last name of user
     * @return Last name of user
     * @return Last name of user
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Timestamp of last change to user
     * @return Timestamp of last change to user
     * @example /Date(1573755038314)/
     * @return Timestamp of last change to user
     * @example /Date(1573755038314)/
     */
    public function getUpdatedDateUTC(): ?string
    {
        return $this->updatedDateUTC;
    }

    /**
     * Boolean to indicate if user is the subscriber
     * @return Boolean to indicate if user is the subscriber
     * @return Boolean to indicate if user is the subscriber
     */
    public function getIsSubscriber(): ?bool
    {
        return $this->isSubscriber;
    }

    /**
     * User role that defines permissions in Xero and via API (READONLY, INVOICEONLY, STANDARD, FINANCIALADVISER, etc)
     * @return User role that defines permissions in Xero and via API (READONLY, INVOICEONLY, STANDARD, FINANCIALADVISER, etc)
     * @return User role that defines permissions in Xero and via API (READONLY, INVOICEONLY, STANDARD, FINANCIALADVISER, etc)
     */
    public function getOrganisationRole(): ?string
    {
        return $this->organisationRole;
    }
}
