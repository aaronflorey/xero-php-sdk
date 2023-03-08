<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class OrganisationsData extends Data
{
    /**
     * Unique Xero identifier
     * @format uuid
     * @example 8be9db36-3598-4755-ba5c-c2dbc8c4a7a2
     */
    #[MapName('OrganisationID')]
    #[MapInputName('OrganisationID')]
    public ?string $organisationID = null;

    /** Display a unique key used for Xero-to-Xero transactions */
    #[MapName('APIKey')]
    #[MapInputName('APIKey')]
    public ?string $aPIKey = null;

    /** Display name of organisation shown in Xero */
    #[MapName('Name')]
    #[MapInputName('Name')]
    public ?string $name = null;

    /** Organisation name shown on Reports */
    #[MapName('LegalName')]
    #[MapInputName('LegalName')]
    public ?string $legalName = null;

    /** Boolean to describe if organisation is registered with a local tax authority i.e. true, false */
    #[MapName('PaysTax')]
    #[MapInputName('PaysTax')]
    public ?bool $paysTax = null;

    /** See Version Types */
    #[MapName('Version')]
    #[MapInputName('Version')]
    public ?string $version = null;

    /** Organisation Type */
    #[MapName('OrganisationType')]
    #[MapInputName('OrganisationType')]
    public ?string $organisationType = null;

    #[MapName('BaseCurrency')]
    #[MapInputName('BaseCurrency')]
    public ?string $baseCurrency = null;

    #[MapName('CountryCode')]
    #[MapInputName('CountryCode')]
    public ?string $countryCode = null;

    /** Boolean to describe if organisation is a demo company. */
    #[MapName('IsDemoCompany')]
    #[MapInputName('IsDemoCompany')]
    public ?bool $isDemoCompany = null;

    /** Will be set to ACTIVE if you can connect to organisation via the Xero API */
    #[MapName('OrganisationStatus')]
    #[MapInputName('OrganisationStatus')]
    public ?string $organisationStatus = null;

    /** Shows for New Zealand, Australian and UK organisations */
    #[MapName('RegistrationNumber')]
    #[MapInputName('RegistrationNumber')]
    public ?string $registrationNumber = null;

    /** Shown if set. US Only. */
    #[MapName('EmployerIdentificationNumber')]
    #[MapInputName('EmployerIdentificationNumber')]
    public ?string $employerIdentificationNumber = null;

    /** Shown if set. Displays in the Xero UI as Tax File Number (AU), GST Number (NZ), VAT Number (UK) and Tax ID Number (US & Global). */
    #[MapName('TaxNumber')]
    #[MapInputName('TaxNumber')]
    public ?string $taxNumber = null;

    /** Calendar day e.g. 0-31 */
    #[MapName('FinancialYearEndDay')]
    #[MapInputName('FinancialYearEndDay')]
    public ?int $financialYearEndDay = null;

    /** Calendar Month e.g. 1-12 */
    #[MapName('FinancialYearEndMonth')]
    #[MapInputName('FinancialYearEndMonth')]
    public ?int $financialYearEndMonth = null;

    /** The accounting basis used for tax returns. See Sales Tax Basis */
    #[MapName('SalesTaxBasis')]
    #[MapInputName('SalesTaxBasis')]
    public ?string $salesTaxBasis = null;

    /** The frequency with which tax returns are processed. See Sales Tax Period */
    #[MapName('SalesTaxPeriod')]
    #[MapInputName('SalesTaxPeriod')]
    public ?string $salesTaxPeriod = null;

    /** The default for LineAmountTypes on sales transactions */
    #[MapName('DefaultSalesTax')]
    #[MapInputName('DefaultSalesTax')]
    public ?string $defaultSalesTax = null;

    /** The default for LineAmountTypes on purchase transactions */
    #[MapName('DefaultPurchasesTax')]
    #[MapInputName('DefaultPurchasesTax')]
    public ?string $defaultPurchasesTax = null;

    /** Shown if set. See lock dates */
    #[MapName('PeriodLockDate')]
    #[MapInputName('PeriodLockDate')]
    public ?string $periodLockDate = null;

    /** Shown if set. See lock dates */
    #[MapName('EndOfYearLockDate')]
    #[MapInputName('EndOfYearLockDate')]
    public ?string $endOfYearLockDate = null;

    /**
     * Timestamp when the organisation was created in Xero
     * @example /Date(1573755038314)/
     */
    #[MapName('CreatedDateUTC')]
    #[MapInputName('CreatedDateUTC')]
    public ?string $createdDateUTC = null;

    #[MapName('Timezone')]
    #[MapInputName('Timezone')]
    public ?string $timezone = null;

    /** Organisation Entity Type */
    #[MapName('OrganisationEntityType')]
    #[MapInputName('OrganisationEntityType')]
    public ?string $organisationEntityType = null;

    /** A unique identifier for the organisation. Potential uses. */
    #[MapName('ShortCode')]
    #[MapInputName('ShortCode')]
    public ?string $shortCode = null;

    /** Organisation Classes describe which plan the Xero organisation is on (e.g. DEMO, TRIAL, PREMIUM) */
    #[MapName('Class')]
    #[MapInputName('Class')]
    public ?string $class = null;

    /** BUSINESS or PARTNER. Partner edition organisations are sold exclusively through accounting partners and have restricted functionality (e.g. no access to invoicing) */
    #[MapName('Edition')]
    #[MapInputName('Edition')]
    public ?string $edition = null;

    /** Description of business type as defined in Organisation settings */
    #[MapName('LineOfBusiness')]
    #[MapInputName('LineOfBusiness')]
    public ?string $lineOfBusiness = null;

    /** @var DataCollection<int, AddressesData> */
    #[MapName('Addresses')]
    #[MapInputName('Addresses')]
    #[DataCollectionOf(AddressesData::class)]
    public ?DataCollection $addresses = null;

    /** @var DataCollection<int, PhonesData> */
    #[MapName('Phones')]
    #[MapInputName('Phones')]
    #[DataCollectionOf(PhonesData::class)]
    public ?DataCollection $phones = null;

    /** @var DataCollection<int, ExternalLinksData> */
    #[MapName('ExternalLinks')]
    #[MapInputName('ExternalLinks')]
    #[DataCollectionOf(ExternalLinksData::class)]
    public ?DataCollection $externalLinks = null;

    #[MapName('PaymentTerms')]
    #[MapInputName('PaymentTerms')]
    public mixed $paymentTerms = null;

    /**
     * Unique Xero identifier
     * @return Unique Xero identifier
     * @format uuid
     * @example 8be9db36-3598-4755-ba5c-c2dbc8c4a7a2
     */
    public function getOrganisationID(): ?string
    {
        return $this->organisationID;
    }

    /**
     * Display a unique key used for Xero-to-Xero transactions
     * @return Display a unique key used for Xero-to-Xero transactions
     */
    public function getAPIKey(): ?string
    {
        return $this->aPIKey;
    }

    /**
     * Display name of organisation shown in Xero
     * @return Display name of organisation shown in Xero
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Organisation name shown on Reports
     * @return Organisation name shown on Reports
     */
    public function getLegalName(): ?string
    {
        return $this->legalName;
    }

    /**
     * Boolean to describe if organisation is registered with a local tax authority i.e. true, false
     * @return Boolean to describe if organisation is registered with a local tax authority i.e. true, false
     */
    public function getPaysTax(): ?bool
    {
        return $this->paysTax;
    }

    /**
     * See Version Types
     * @return See Version Types
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Organisation Type
     * @return Organisation Type
     */
    public function getOrganisationType(): ?string
    {
        return $this->organisationType;
    }

    public function getBaseCurrency(): ?string
    {
        return $this->baseCurrency;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Boolean to describe if organisation is a demo company.
     * @return Boolean to describe if organisation is a demo company.
     */
    public function getIsDemoCompany(): ?bool
    {
        return $this->isDemoCompany;
    }

    /**
     * Will be set to ACTIVE if you can connect to organisation via the Xero API
     * @return Will be set to ACTIVE if you can connect to organisation via the Xero API
     */
    public function getOrganisationStatus(): ?string
    {
        return $this->organisationStatus;
    }

    /**
     * Shows for New Zealand, Australian and UK organisations
     * @return Shows for New Zealand, Australian and UK organisations
     */
    public function getRegistrationNumber(): ?string
    {
        return $this->registrationNumber;
    }

    /**
     * Shown if set. US Only.
     * @return Shown if set. US Only.
     */
    public function getEmployerIdentificationNumber(): ?string
    {
        return $this->employerIdentificationNumber;
    }

    /**
     * Shown if set. Displays in the Xero UI as Tax File Number (AU), GST Number (NZ), VAT Number (UK) and Tax ID Number (US & Global).
     * @return Shown if set. Displays in the Xero UI as Tax File Number (AU), GST Number (NZ), VAT Number (UK) and Tax ID Number (US & Global).
     */
    public function getTaxNumber(): ?string
    {
        return $this->taxNumber;
    }

    /**
     * Calendar day e.g. 0-31
     * @return Calendar day e.g. 0-31
     */
    public function getFinancialYearEndDay(): ?int
    {
        return $this->financialYearEndDay;
    }

    /**
     * Calendar Month e.g. 1-12
     * @return Calendar Month e.g. 1-12
     */
    public function getFinancialYearEndMonth(): ?int
    {
        return $this->financialYearEndMonth;
    }

    /**
     * The accounting basis used for tax returns. See Sales Tax Basis
     * @return The accounting basis used for tax returns. See Sales Tax Basis
     */
    public function getSalesTaxBasis(): ?string
    {
        return $this->salesTaxBasis;
    }

    /**
     * The frequency with which tax returns are processed. See Sales Tax Period
     * @return The frequency with which tax returns are processed. See Sales Tax Period
     */
    public function getSalesTaxPeriod(): ?string
    {
        return $this->salesTaxPeriod;
    }

    /**
     * The default for LineAmountTypes on sales transactions
     * @return The default for LineAmountTypes on sales transactions
     */
    public function getDefaultSalesTax(): ?string
    {
        return $this->defaultSalesTax;
    }

    /**
     * The default for LineAmountTypes on purchase transactions
     * @return The default for LineAmountTypes on purchase transactions
     */
    public function getDefaultPurchasesTax(): ?string
    {
        return $this->defaultPurchasesTax;
    }

    /**
     * Shown if set. See lock dates
     * @return Shown if set. See lock dates
     */
    public function getPeriodLockDate(): ?string
    {
        return $this->periodLockDate;
    }

    /**
     * Shown if set. See lock dates
     * @return Shown if set. See lock dates
     */
    public function getEndOfYearLockDate(): ?string
    {
        return $this->endOfYearLockDate;
    }

    /**
     * Timestamp when the organisation was created in Xero
     * @return Timestamp when the organisation was created in Xero
     * @example /Date(1573755038314)/
     */
    public function getCreatedDateUTC(): ?string
    {
        return $this->createdDateUTC;
    }

    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    /**
     * Organisation Entity Type
     * @return Organisation Entity Type
     */
    public function getOrganisationEntityType(): ?string
    {
        return $this->organisationEntityType;
    }

    /**
     * A unique identifier for the organisation. Potential uses.
     * @return A unique identifier for the organisation. Potential uses.
     */
    public function getShortCode(): ?string
    {
        return $this->shortCode;
    }

    /**
     * Organisation Classes describe which plan the Xero organisation is on (e.g. DEMO, TRIAL, PREMIUM)
     * @return Organisation Classes describe which plan the Xero organisation is on (e.g. DEMO, TRIAL, PREMIUM)
     */
    public function getClass(): ?string
    {
        return $this->class;
    }

    /**
     * BUSINESS or PARTNER. Partner edition organisations are sold exclusively through accounting partners and have restricted functionality (e.g. no access to invoicing)
     * @return BUSINESS or PARTNER. Partner edition organisations are sold exclusively through accounting partners and have restricted functionality (e.g. no access to invoicing)
     */
    public function getEdition(): ?string
    {
        return $this->edition;
    }

    /**
     * Description of business type as defined in Organisation settings
     * @return Description of business type as defined in Organisation settings
     */
    public function getLineOfBusiness(): ?string
    {
        return $this->lineOfBusiness;
    }

    /**
     * @return @var DataCollection<int, AddressesData>
     */
    public function getAddresses(): ?DataCollection
    {
        return $this->addresses;
    }

    /**
     * @return @var DataCollection<int, PhonesData>
     */
    public function getPhones(): ?DataCollection
    {
        return $this->phones;
    }

    /**
     * @return @var DataCollection<int, ExternalLinksData>
     */
    public function getExternalLinks(): ?DataCollection
    {
        return $this->externalLinks;
    }

    public function getPaymentTerms(): mixed
    {
        return $this->paymentTerms;
    }
}
