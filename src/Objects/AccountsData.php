<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class AccountsData extends Data
{
    /**
     * Customer defined alpha numeric account code e.g 200 or SALES (max length = 10)
     * @example 4400
     */
    #[MapName('Code')]
    #[MapInputName('Code')]
    public ?string $code = null;

    /**
     * Name of account (max length = 150)
     * @example Food Sales
     */
    #[MapName('Name')]
    #[MapInputName('Name')]
    public ?string $name = null;

    /**
     * The Xero identifier for an account – specified as a string following  the endpoint name   e.g. /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    #[MapName('AccountID')]
    #[MapInputName('AccountID')]
    public ?string $accountID = null;

    #[MapName('Type')]
    #[MapInputName('Type')]
    public ?string $type = null;

    /** For bank accounts only (Account Type BANK) */
    #[MapName('BankAccountNumber')]
    #[MapInputName('BankAccountNumber')]
    public ?string $bankAccountNumber = null;

    /** Accounts with a status of ACTIVE can be updated to ARCHIVED. See Account Status Codes */
    #[MapName('Status')]
    #[MapInputName('Status')]
    public ?string $status = null;

    /** Description of the Account. Valid for all types of accounts except bank accounts (max length = 4000) */
    #[MapName('Description')]
    #[MapInputName('Description')]
    public ?string $description = null;

    /** For bank accounts only. See Bank Account types */
    #[MapName('BankAccountType')]
    #[MapInputName('BankAccountType')]
    public ?string $bankAccountType = null;

    #[MapName('CurrencyCode')]
    #[MapInputName('CurrencyCode')]
    public ?string $currencyCode = null;

    /** The tax type from taxRates */
    #[MapName('TaxType')]
    #[MapInputName('TaxType')]
    public ?string $taxType = null;

    /** Boolean – describes whether account can have payments applied to it */
    #[MapName('EnablePaymentsToAccount')]
    #[MapInputName('EnablePaymentsToAccount')]
    public ?bool $enablePaymentsToAccount = null;

    /** Boolean – describes whether account code is available for use with expense claims */
    #[MapName('ShowInExpenseClaims')]
    #[MapInputName('ShowInExpenseClaims')]
    public ?bool $showInExpenseClaims = null;

    /** See Account Class Types */
    #[MapName('Class')]
    #[MapInputName('Class')]
    public ?string $class = null;

    /** If this is a system account then this element is returned. See System Account types. Note that non-system accounts may have this element set as either “” or null. */
    #[MapName('SystemAccount')]
    #[MapInputName('SystemAccount')]
    public ?string $systemAccount = null;

    /** Shown if set */
    #[MapName('ReportingCode')]
    #[MapInputName('ReportingCode')]
    public ?string $reportingCode = null;

    /** Shown if set */
    #[MapName('ReportingCodeName')]
    #[MapInputName('ReportingCodeName')]
    public ?string $reportingCodeName = null;

    /**
     * boolean to indicate if an account has an attachment (read only)
     * @example false
     */
    #[MapName('HasAttachments')]
    #[MapInputName('HasAttachments')]
    public ?bool $hasAttachments = null;

    /**
     * Last modified date UTC format
     * @example /Date(1573755038314)/
     */
    #[MapName('UpdatedDateUTC')]
    #[MapInputName('UpdatedDateUTC')]
    public ?string $updatedDateUTC = null;

    /** Boolean – describes whether the account is shown in the watchlist widget on the dashboard */
    #[MapName('AddToWatchlist')]
    #[MapInputName('AddToWatchlist')]
    public ?bool $addToWatchlist = null;

    /** @var DataCollection<int, ValidationErrorsData> */
    #[MapName('ValidationErrors')]
    #[MapInputName('ValidationErrors')]
    #[DataCollectionOf(ValidationErrorsData::class)]
    public ?DataCollection $validationErrors = null;

    /**
     * Customer defined alpha numeric account code e.g 200 or SALES (max length = 10)
     * @return Customer defined alpha numeric account code e.g 200 or SALES (max length = 10)
     * @example 4400
     * @return Customer defined alpha numeric account code e.g 200 or SALES (max length = 10)
     * @example 4400
     * @return Customer defined alpha numeric account code e.g 200 or SALES (max length = 10)
     * @example 4400
     * @return Customer defined alpha numeric account code e.g 200 or SALES (max length = 10)
     * @example 4400
     * @return Customer defined alpha numeric account code e.g 200 or SALES (max length = 10)
     * @example 4400
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Name of account (max length = 150)
     * @return Name of account (max length = 150)
     * @example Food Sales
     * @return Name of account (max length = 150)
     * @example Food Sales
     * @return Name of account (max length = 150)
     * @example Food Sales
     * @return Name of account (max length = 150)
     * @example Food Sales
     * @return Name of account (max length = 150)
     * @example Food Sales
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The Xero identifier for an account – specified as a string following  the endpoint name   e.g. /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @return The Xero identifier for an account – specified as a string following  the endpoint name   e.g. /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The Xero identifier for an account – specified as a string following  the endpoint name   e.g. /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The Xero identifier for an account – specified as a string following  the endpoint name   e.g. /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The Xero identifier for an account – specified as a string following  the endpoint name   e.g. /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     * @return The Xero identifier for an account – specified as a string following  the endpoint name   e.g. /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    public function getAccountID(): ?string
    {
        return $this->accountID;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * For bank accounts only (Account Type BANK)
     * @return For bank accounts only (Account Type BANK)
     * @return For bank accounts only (Account Type BANK)
     * @return For bank accounts only (Account Type BANK)
     * @return For bank accounts only (Account Type BANK)
     * @return For bank accounts only (Account Type BANK)
     */
    public function getBankAccountNumber(): ?string
    {
        return $this->bankAccountNumber;
    }

    /**
     * Accounts with a status of ACTIVE can be updated to ARCHIVED. See Account Status Codes
     * @return Accounts with a status of ACTIVE can be updated to ARCHIVED. See Account Status Codes
     * @return Accounts with a status of ACTIVE can be updated to ARCHIVED. See Account Status Codes
     * @return Accounts with a status of ACTIVE can be updated to ARCHIVED. See Account Status Codes
     * @return Accounts with a status of ACTIVE can be updated to ARCHIVED. See Account Status Codes
     * @return Accounts with a status of ACTIVE can be updated to ARCHIVED. See Account Status Codes
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Description of the Account. Valid for all types of accounts except bank accounts (max length = 4000)
     * @return Description of the Account. Valid for all types of accounts except bank accounts (max length = 4000)
     * @return Description of the Account. Valid for all types of accounts except bank accounts (max length = 4000)
     * @return Description of the Account. Valid for all types of accounts except bank accounts (max length = 4000)
     * @return Description of the Account. Valid for all types of accounts except bank accounts (max length = 4000)
     * @return Description of the Account. Valid for all types of accounts except bank accounts (max length = 4000)
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * For bank accounts only. See Bank Account types
     * @return For bank accounts only. See Bank Account types
     * @return For bank accounts only. See Bank Account types
     * @return For bank accounts only. See Bank Account types
     * @return For bank accounts only. See Bank Account types
     * @return For bank accounts only. See Bank Account types
     */
    public function getBankAccountType(): ?string
    {
        return $this->bankAccountType;
    }

    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * The tax type from taxRates
     * @return The tax type from taxRates
     * @return The tax type from taxRates
     * @return The tax type from taxRates
     * @return The tax type from taxRates
     * @return The tax type from taxRates
     */
    public function getTaxType(): ?string
    {
        return $this->taxType;
    }

    /**
     * Boolean – describes whether account can have payments applied to it
     * @return Boolean – describes whether account can have payments applied to it
     * @return Boolean – describes whether account can have payments applied to it
     * @return Boolean – describes whether account can have payments applied to it
     * @return Boolean – describes whether account can have payments applied to it
     * @return Boolean – describes whether account can have payments applied to it
     */
    public function getEnablePaymentsToAccount(): ?bool
    {
        return $this->enablePaymentsToAccount;
    }

    /**
     * Boolean – describes whether account code is available for use with expense claims
     * @return Boolean – describes whether account code is available for use with expense claims
     * @return Boolean – describes whether account code is available for use with expense claims
     * @return Boolean – describes whether account code is available for use with expense claims
     * @return Boolean – describes whether account code is available for use with expense claims
     * @return Boolean – describes whether account code is available for use with expense claims
     */
    public function getShowInExpenseClaims(): ?bool
    {
        return $this->showInExpenseClaims;
    }

    /**
     * See Account Class Types
     * @return See Account Class Types
     * @return See Account Class Types
     * @return See Account Class Types
     * @return See Account Class Types
     * @return See Account Class Types
     */
    public function getClass(): ?string
    {
        return $this->class;
    }

    /**
     * If this is a system account then this element is returned. See System Account types. Note that non-system accounts may have this element set as either “” or null.
     * @return If this is a system account then this element is returned. See System Account types. Note that non-system accounts may have this element set as either “” or null.
     * @return If this is a system account then this element is returned. See System Account types. Note that non-system accounts may have this element set as either “” or null.
     * @return If this is a system account then this element is returned. See System Account types. Note that non-system accounts may have this element set as either “” or null.
     * @return If this is a system account then this element is returned. See System Account types. Note that non-system accounts may have this element set as either “” or null.
     * @return If this is a system account then this element is returned. See System Account types. Note that non-system accounts may have this element set as either “” or null.
     */
    public function getSystemAccount(): ?string
    {
        return $this->systemAccount;
    }

    /**
     * Shown if set
     * @return Shown if set
     * @return Shown if set
     * @return Shown if set
     * @return Shown if set
     * @return Shown if set
     */
    public function getReportingCode(): ?string
    {
        return $this->reportingCode;
    }

    /**
     * Shown if set
     * @return Shown if set
     * @return Shown if set
     * @return Shown if set
     * @return Shown if set
     * @return Shown if set
     */
    public function getReportingCodeName(): ?string
    {
        return $this->reportingCodeName;
    }

    /**
     * boolean to indicate if an account has an attachment (read only)
     * @return boolean to indicate if an account has an attachment (read only)
     * @example false
     * @return boolean to indicate if an account has an attachment (read only)
     * @example false
     * @return boolean to indicate if an account has an attachment (read only)
     * @example false
     * @return boolean to indicate if an account has an attachment (read only)
     * @example false
     * @return boolean to indicate if an account has an attachment (read only)
     * @example false
     */
    public function getHasAttachments(): ?bool
    {
        return $this->hasAttachments;
    }

    /**
     * Last modified date UTC format
     * @return Last modified date UTC format
     * @example /Date(1573755038314)/
     * @return Last modified date UTC format
     * @example /Date(1573755038314)/
     * @return Last modified date UTC format
     * @example /Date(1573755038314)/
     * @return Last modified date UTC format
     * @example /Date(1573755038314)/
     * @return Last modified date UTC format
     * @example /Date(1573755038314)/
     */
    public function getUpdatedDateUTC(): ?string
    {
        return $this->updatedDateUTC;
    }

    /**
     * Boolean – describes whether the account is shown in the watchlist widget on the dashboard
     * @return Boolean – describes whether the account is shown in the watchlist widget on the dashboard
     * @return Boolean – describes whether the account is shown in the watchlist widget on the dashboard
     * @return Boolean – describes whether the account is shown in the watchlist widget on the dashboard
     * @return Boolean – describes whether the account is shown in the watchlist widget on the dashboard
     * @return Boolean – describes whether the account is shown in the watchlist widget on the dashboard
     */
    public function getAddToWatchlist(): ?bool
    {
        return $this->addToWatchlist;
    }

    /**
     * @return @var DataCollection<int, ValidationErrorsData>
     */
    public function getValidationErrors(): ?DataCollection
    {
        return $this->validationErrors;
    }

    /**
     * Customer defined alpha numeric account code e.g 200 or SALES (max length = 10)
     * @example 4400
     */
    public function setCode(?string $code): ?self
    {
        $this->code = $code;
        return $this;
    }

    /**
     * Name of account (max length = 150)
     * @example Food Sales
     */
    public function setName(?string $name): ?self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * The Xero identifier for an account – specified as a string following  the endpoint name   e.g. /297c2dc5-cc47-4afd-8ec8-74990b8761e9
     * @format uuid
     * @example 00000000-0000-0000-0000-000000000000
     */
    public function setAccountID(?string $accountID): ?self
    {
        $this->accountID = $accountID;
        return $this;
    }

    public function setType(?string $type): ?self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * For bank accounts only (Account Type BANK)
     */
    public function setBankAccountNumber(?string $bankAccountNumber): ?self
    {
        $this->bankAccountNumber = $bankAccountNumber;
        return $this;
    }

    /**
     * Accounts with a status of ACTIVE can be updated to ARCHIVED. See Account Status Codes
     */
    public function setStatus(?string $status): ?self
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Description of the Account. Valid for all types of accounts except bank accounts (max length = 4000)
     */
    public function setDescription(?string $description): ?self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * For bank accounts only. See Bank Account types
     */
    public function setBankAccountType(?string $bankAccountType): ?self
    {
        $this->bankAccountType = $bankAccountType;
        return $this;
    }

    public function setCurrencyCode(?string $currencyCode): ?self
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * The tax type from taxRates
     */
    public function setTaxType(?string $taxType): ?self
    {
        $this->taxType = $taxType;
        return $this;
    }

    /**
     * Boolean – describes whether account can have payments applied to it
     */
    public function setEnablePaymentsToAccount(?bool $enablePaymentsToAccount): ?self
    {
        $this->enablePaymentsToAccount = $enablePaymentsToAccount;
        return $this;
    }

    /**
     * Boolean – describes whether account code is available for use with expense claims
     */
    public function setShowInExpenseClaims(?bool $showInExpenseClaims): ?self
    {
        $this->showInExpenseClaims = $showInExpenseClaims;
        return $this;
    }

    /**
     * See Account Class Types
     */
    public function setClass(?string $class): ?self
    {
        $this->class = $class;
        return $this;
    }

    /**
     * If this is a system account then this element is returned. See System Account types. Note that non-system accounts may have this element set as either “” or null.
     */
    public function setSystemAccount(?string $systemAccount): ?self
    {
        $this->systemAccount = $systemAccount;
        return $this;
    }

    /**
     * Shown if set
     */
    public function setReportingCode(?string $reportingCode): ?self
    {
        $this->reportingCode = $reportingCode;
        return $this;
    }

    /**
     * Shown if set
     */
    public function setReportingCodeName(?string $reportingCodeName): ?self
    {
        $this->reportingCodeName = $reportingCodeName;
        return $this;
    }

    /**
     * boolean to indicate if an account has an attachment (read only)
     * @example false
     */
    public function setHasAttachments(?bool $hasAttachments): ?self
    {
        $this->hasAttachments = $hasAttachments;
        return $this;
    }

    /**
     * Last modified date UTC format
     * @example /Date(1573755038314)/
     */
    public function setUpdatedDateUTC(?string $updatedDateUTC): ?self
    {
        $this->updatedDateUTC = $updatedDateUTC;
        return $this;
    }

    /**
     * Boolean – describes whether the account is shown in the watchlist widget on the dashboard
     */
    public function setAddToWatchlist(?bool $addToWatchlist): ?self
    {
        $this->addToWatchlist = $addToWatchlist;
        return $this;
    }
}
