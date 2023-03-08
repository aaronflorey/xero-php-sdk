<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class EmployeesData extends Data
{
    /**
     * The Xero identifier for an employee e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     */
    #[MapName('EmployeeID')]
    #[MapInputName('EmployeeID')]
    public ?string $employeeID = null;

    /** Current status of an employee – see contact status types */
    #[MapName('Status')]
    #[MapInputName('Status')]
    public ?string $status = null;

    /** First name of an employee (max length = 255) */
    #[MapName('FirstName')]
    #[MapInputName('FirstName')]
    public ?string $firstName = null;

    /** Last name of an employee (max length = 255) */
    #[MapName('LastName')]
    #[MapInputName('LastName')]
    public ?string $lastName = null;

    #[MapName('ExternalLink')]
    #[MapInputName('ExternalLink')]
    public mixed $externalLink = null;

    /** @example /Date(1573755038314)/ */
    #[MapName('UpdatedDateUTC')]
    #[MapInputName('UpdatedDateUTC')]
    public ?string $updatedDateUTC = null;

    /**
     * A string to indicate if a invoice status
     * @example ERROR
     */
    #[MapName('StatusAttributeString')]
    #[MapInputName('StatusAttributeString')]
    public ?string $statusAttributeString = null;

    /** @var DataCollection<int, ValidationErrorsData> */
    #[MapName('ValidationErrors')]
    #[MapInputName('ValidationErrors')]
    #[DataCollectionOf(ValidationErrorsData::class)]
    public ?DataCollection $validationErrors = null;

    /**
     * The Xero identifier for an employee e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @return The Xero identifier for an employee e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return The Xero identifier for an employee e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return The Xero identifier for an employee e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @return The Xero identifier for an employee e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     */
    public function getEmployeeID(): ?string
    {
        return $this->employeeID;
    }

    /**
     * Current status of an employee – see contact status types
     * @return Current status of an employee – see contact status types
     * @return Current status of an employee – see contact status types
     * @return Current status of an employee – see contact status types
     * @return Current status of an employee – see contact status types
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * First name of an employee (max length = 255)
     * @return First name of an employee (max length = 255)
     * @return First name of an employee (max length = 255)
     * @return First name of an employee (max length = 255)
     * @return First name of an employee (max length = 255)
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Last name of an employee (max length = 255)
     * @return Last name of an employee (max length = 255)
     * @return Last name of an employee (max length = 255)
     * @return Last name of an employee (max length = 255)
     * @return Last name of an employee (max length = 255)
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function getExternalLink(): mixed
    {
        return $this->externalLink;
    }

    /**
     * @return @example /Date(1573755038314)/
     * @return @example /Date(1573755038314)/
     * @return @example /Date(1573755038314)/
     * @return @example /Date(1573755038314)/
     */
    public function getUpdatedDateUTC(): ?string
    {
        return $this->updatedDateUTC;
    }

    /**
     * A string to indicate if a invoice status
     * @return A string to indicate if a invoice status
     * @example ERROR
     * @return A string to indicate if a invoice status
     * @example ERROR
     * @return A string to indicate if a invoice status
     * @example ERROR
     * @return A string to indicate if a invoice status
     * @example ERROR
     */
    public function getStatusAttributeString(): ?string
    {
        return $this->statusAttributeString;
    }

    /**
     * @return @var DataCollection<int, ValidationErrorsData>
     */
    public function getValidationErrors(): ?DataCollection
    {
        return $this->validationErrors;
    }

    /**
     * The Xero identifier for an employee e.g. 297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     */
    public function setEmployeeID(?string $employeeID): ?self
    {
        $this->employeeID = $employeeID;
        return $this;
    }

    /**
     * Current status of an employee – see contact status types
     */
    public function setStatus(?string $status): ?self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * First name of an employee (max length = 255)
     */
    public function setFirstName(?string $firstName): ?self
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Last name of an employee (max length = 255)
     */
    public function setLastName(?string $lastName): ?self
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function setExternalLink(mixed $externalLink): ?self
    {
        $this->externalLink = $externalLink;
        return $this;
    }

    /**
     * @example /Date(1573755038314)/
     */
    public function setUpdatedDateUTC(?string $updatedDateUTC): ?self
    {
        $this->updatedDateUTC = $updatedDateUTC;
        return $this;
    }

    /**
     * A string to indicate if a invoice status
     * @example ERROR
     */
    public function setStatusAttributeString(?string $statusAttributeString): ?self
    {
        $this->statusAttributeString = $statusAttributeString;
        return $this;
    }
}
