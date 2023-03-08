<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;

class ContactPersonsData extends Data
{
    /** First name of person */
    #[MapName('FirstName')]
    #[MapInputName('FirstName')]
    public ?string $firstName = null;

    /** Last name of person */
    #[MapName('LastName')]
    #[MapInputName('LastName')]
    public ?string $lastName = null;

    /** Email address of person */
    #[MapName('EmailAddress')]
    #[MapInputName('EmailAddress')]
    public ?string $emailAddress = null;

    /** boolean to indicate whether contact should be included on emails with invoices etc. */
    #[MapName('IncludeInEmails')]
    #[MapInputName('IncludeInEmails')]
    public ?bool $includeInEmails = null;

    /**
     * First name of person
     * @return First name of person
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Last name of person
     * @return Last name of person
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Email address of person
     * @return Email address of person
     */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    /**
     * boolean to indicate whether contact should be included on emails with invoices etc.
     * @return boolean to indicate whether contact should be included on emails with invoices etc.
     */
    public function getIncludeInEmails(): ?bool
    {
        return $this->includeInEmails;
    }
}
