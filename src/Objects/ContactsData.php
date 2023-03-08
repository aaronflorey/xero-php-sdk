<?php

namespace Mochaka\XeroSDK\Objects;

use Spatie\LaravelData\Attributes\DataCollectionOf;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\DataCollection;

class ContactsData extends Data
{
    /**
     * Xero identifier
     * @format uuid
     */
    #[MapName('ContactID')]
    #[MapInputName('ContactID')]
    public ?string $contactID = null;

    /**
     * ID for the destination of a merged contact. Only returned when using paging or when fetching a contact by ContactId or ContactNumber.
     * @format uuid
     */
    #[MapName('MergedToContactID')]
    #[MapInputName('MergedToContactID')]
    public ?string $mergedToContactID = null;

    /** This can be updated via the API only i.e. This field is read only on the Xero contact screen, used to identify contacts in external systems (max length = 50). If the Contact Number is used, this is displayed as Contact Code in the Contacts UI in Xero. */
    #[MapName('ContactNumber')]
    #[MapInputName('ContactNumber')]
    public ?string $contactNumber = null;

    /** A user defined account number. This can be updated via the API and the Xero UI (max length = 50) */
    #[MapName('AccountNumber')]
    #[MapInputName('AccountNumber')]
    public ?string $accountNumber = null;

    /** Current status of a contact – see contact status types */
    #[MapName('ContactStatus')]
    #[MapInputName('ContactStatus')]
    public ?string $contactStatus = null;

    /** Full name of contact/organisation (max length = 255) */
    #[MapName('Name')]
    #[MapInputName('Name')]
    public ?string $name = null;

    /** First name of contact person (max length = 255) */
    #[MapName('FirstName')]
    #[MapInputName('FirstName')]
    public ?string $firstName = null;

    /** Last name of contact person (max length = 255) */
    #[MapName('LastName')]
    #[MapInputName('LastName')]
    public ?string $lastName = null;

    /** Company registration number (max length = 50) */
    #[MapName('CompanyNumber')]
    #[MapInputName('CompanyNumber')]
    public ?string $companyNumber = null;

    /** Email address of contact person (umlauts not supported) (max length  = 255) */
    #[MapName('EmailAddress')]
    #[MapInputName('EmailAddress')]
    public ?string $emailAddress = null;

    /** Skype user name of contact */
    #[MapName('SkypeUserName')]
    #[MapInputName('SkypeUserName')]
    public ?string $skypeUserName = null;

    /** @var DataCollection<int, ContactPersonsData> */
    #[MapName('ContactPersons')]
    #[MapInputName('ContactPersons')]
    #[DataCollectionOf(ContactPersonsData::class)]
    public ?DataCollection $contactPersons = null;

    /** Bank account number of contact */
    #[MapName('BankAccountDetails')]
    #[MapInputName('BankAccountDetails')]
    public ?string $bankAccountDetails = null;

    /** Tax number of contact – this is also known as the ABN (Australia), GST Number (New Zealand), VAT Number (UK) or Tax ID Number (US and global) in the Xero UI depending on which regionalized version of Xero you are using (max length = 50) */
    #[MapName('TaxNumber')]
    #[MapInputName('TaxNumber')]
    public ?string $taxNumber = null;

    /** The tax type from TaxRates */
    #[MapName('AccountsReceivableTaxType')]
    #[MapInputName('AccountsReceivableTaxType')]
    public ?string $accountsReceivableTaxType = null;

    /** The tax type from TaxRates */
    #[MapName('AccountsPayableTaxType')]
    #[MapInputName('AccountsPayableTaxType')]
    public ?string $accountsPayableTaxType = null;

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

    /** true or false – Boolean that describes if a contact that has any AP  invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts payable invoice is generated against this contact. */
    #[MapName('IsSupplier')]
    #[MapInputName('IsSupplier')]
    public ?bool $isSupplier = null;

    /** true or false – Boolean that describes if a contact has any AR invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts receivable invoice is generated against this contact. */
    #[MapName('IsCustomer')]
    #[MapInputName('IsCustomer')]
    public ?bool $isCustomer = null;

    /** The default sales line amount type for a contact. Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber. */
    #[MapName('SalesDefaultLineAmountType')]
    #[MapInputName('SalesDefaultLineAmountType')]
    public ?string $salesDefaultLineAmountType = null;

    /** The default purchases line amount type for a contact Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber. */
    #[MapName('PurchasesDefaultLineAmountType')]
    #[MapInputName('PurchasesDefaultLineAmountType')]
    public ?string $purchasesDefaultLineAmountType = null;

    #[MapName('DefaultCurrency')]
    #[MapInputName('DefaultCurrency')]
    public ?string $defaultCurrency = null;

    /** Store XeroNetworkKey for contacts. */
    #[MapName('XeroNetworkKey')]
    #[MapInputName('XeroNetworkKey')]
    public ?string $xeroNetworkKey = null;

    /** The default sales account code for contacts */
    #[MapName('SalesDefaultAccountCode')]
    #[MapInputName('SalesDefaultAccountCode')]
    public ?string $salesDefaultAccountCode = null;

    /** The default purchases account code for contacts */
    #[MapName('PurchasesDefaultAccountCode')]
    #[MapInputName('PurchasesDefaultAccountCode')]
    public ?string $purchasesDefaultAccountCode = null;

    /** @var DataCollection<int, SalesTrackingCategoriesData> */
    #[MapName('SalesTrackingCategories')]
    #[MapInputName('SalesTrackingCategories')]
    #[DataCollectionOf(SalesTrackingCategoriesData::class)]
    public ?DataCollection $salesTrackingCategories = null;

    /** @var DataCollection<int, PurchasesTrackingCategoriesData> */
    #[MapName('PurchasesTrackingCategories')]
    #[MapInputName('PurchasesTrackingCategories')]
    #[DataCollectionOf(PurchasesTrackingCategoriesData::class)]
    public ?DataCollection $purchasesTrackingCategories = null;

    /** The name of the Tracking Category assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories */
    #[MapName('TrackingCategoryName')]
    #[MapInputName('TrackingCategoryName')]
    public ?string $trackingCategoryName = null;

    /** The name of the Tracking Option assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories */
    #[MapName('TrackingCategoryOption')]
    #[MapInputName('TrackingCategoryOption')]
    public ?string $trackingCategoryOption = null;

    #[MapName('PaymentTerms')]
    #[MapInputName('PaymentTerms')]
    public mixed $paymentTerms = null;

    /**
     * UTC timestamp of last update to contact
     * @example /Date(1573755038314)/
     */
    #[MapName('UpdatedDateUTC')]
    #[MapInputName('UpdatedDateUTC')]
    public ?string $updatedDateUTC = null;

    /** @var DataCollection<int, ContactGroupsData> */
    #[MapName('ContactGroups')]
    #[MapInputName('ContactGroups')]
    #[DataCollectionOf(ContactGroupsData::class)]
    public ?DataCollection $contactGroups = null;

    /** Website address for contact (read only) */
    #[MapName('Website')]
    #[MapInputName('Website')]
    public ?string $website = null;

    #[MapName('BrandingTheme')]
    #[MapInputName('BrandingTheme')]
    public mixed $brandingTheme = null;

    #[MapName('BatchPayments')]
    #[MapInputName('BatchPayments')]
    public mixed $batchPayments = null;

    /**
     * The default discount rate for the contact (read only)
     * @format double
     */
    #[MapName('Discount')]
    #[MapInputName('Discount')]
    public ?int $discount = null;

    #[MapName('Balances')]
    #[MapInputName('Balances')]
    public mixed $balances = null;

    /** @var DataCollection<int, AttachmentsData> */
    #[MapName('Attachments')]
    #[MapInputName('Attachments')]
    #[DataCollectionOf(AttachmentsData::class)]
    public ?DataCollection $attachments = null;

    /**
     * A boolean to indicate if a contact has an attachment
     * @example false
     */
    #[MapName('HasAttachments')]
    #[MapInputName('HasAttachments')]
    public ?bool $hasAttachments = null;

    /** @var DataCollection<int, ValidationErrorsData> */
    #[MapName('ValidationErrors')]
    #[MapInputName('ValidationErrors')]
    #[DataCollectionOf(ValidationErrorsData::class)]
    public ?DataCollection $validationErrors = null;

    /**
     * A boolean to indicate if a contact has an validation errors
     * @example false
     */
    #[MapName('HasValidationErrors')]
    #[MapInputName('HasValidationErrors')]
    public ?bool $hasValidationErrors = null;

    /** Status of object */
    #[MapName('StatusAttributeString')]
    #[MapInputName('StatusAttributeString')]
    public ?string $statusAttributeString = null;

    /**
     * Xero identifier
     * @return Xero identifier
     * @format uuid
     * @return Xero identifier
     * @format uuid
     * @return Xero identifier
     * @format uuid
     * @return Xero identifier
     * @format uuid
     * @return Xero identifier
     * @format uuid
     * @return Xero identifier
     * @format uuid
     * @return Xero identifier
     * @format uuid
     * @return Xero identifier
     * @format uuid
     */
    public function getContactID(): ?string
    {
        return $this->contactID;
    }

    /**
     * ID for the destination of a merged contact. Only returned when using paging or when fetching a contact by ContactId or ContactNumber.
     * @return ID for the destination of a merged contact. Only returned when using paging or when fetching a contact by ContactId or ContactNumber.
     * @format uuid
     * @return ID for the destination of a merged contact. Only returned when using paging or when fetching a contact by ContactId or ContactNumber.
     * @format uuid
     * @return ID for the destination of a merged contact. Only returned when using paging or when fetching a contact by ContactId or ContactNumber.
     * @format uuid
     * @return ID for the destination of a merged contact. Only returned when using paging or when fetching a contact by ContactId or ContactNumber.
     * @format uuid
     * @return ID for the destination of a merged contact. Only returned when using paging or when fetching a contact by ContactId or ContactNumber.
     * @format uuid
     * @return ID for the destination of a merged contact. Only returned when using paging or when fetching a contact by ContactId or ContactNumber.
     * @format uuid
     * @return ID for the destination of a merged contact. Only returned when using paging or when fetching a contact by ContactId or ContactNumber.
     * @format uuid
     * @return ID for the destination of a merged contact. Only returned when using paging or when fetching a contact by ContactId or ContactNumber.
     * @format uuid
     */
    public function getMergedToContactID(): ?string
    {
        return $this->mergedToContactID;
    }

    /**
     * This can be updated via the API only i.e. This field is read only on the Xero contact screen, used to identify contacts in external systems (max length = 50). If the Contact Number is used, this is displayed as Contact Code in the Contacts UI in Xero.
     * @return This can be updated via the API only i.e. This field is read only on the Xero contact screen, used to identify contacts in external systems (max length = 50). If the Contact Number is used, this is displayed as Contact Code in the Contacts UI in Xero.
     * @return This can be updated via the API only i.e. This field is read only on the Xero contact screen, used to identify contacts in external systems (max length = 50). If the Contact Number is used, this is displayed as Contact Code in the Contacts UI in Xero.
     * @return This can be updated via the API only i.e. This field is read only on the Xero contact screen, used to identify contacts in external systems (max length = 50). If the Contact Number is used, this is displayed as Contact Code in the Contacts UI in Xero.
     * @return This can be updated via the API only i.e. This field is read only on the Xero contact screen, used to identify contacts in external systems (max length = 50). If the Contact Number is used, this is displayed as Contact Code in the Contacts UI in Xero.
     * @return This can be updated via the API only i.e. This field is read only on the Xero contact screen, used to identify contacts in external systems (max length = 50). If the Contact Number is used, this is displayed as Contact Code in the Contacts UI in Xero.
     * @return This can be updated via the API only i.e. This field is read only on the Xero contact screen, used to identify contacts in external systems (max length = 50). If the Contact Number is used, this is displayed as Contact Code in the Contacts UI in Xero.
     * @return This can be updated via the API only i.e. This field is read only on the Xero contact screen, used to identify contacts in external systems (max length = 50). If the Contact Number is used, this is displayed as Contact Code in the Contacts UI in Xero.
     * @return This can be updated via the API only i.e. This field is read only on the Xero contact screen, used to identify contacts in external systems (max length = 50). If the Contact Number is used, this is displayed as Contact Code in the Contacts UI in Xero.
     */
    public function getContactNumber(): ?string
    {
        return $this->contactNumber;
    }

    /**
     * A user defined account number. This can be updated via the API and the Xero UI (max length = 50)
     * @return A user defined account number. This can be updated via the API and the Xero UI (max length = 50)
     * @return A user defined account number. This can be updated via the API and the Xero UI (max length = 50)
     * @return A user defined account number. This can be updated via the API and the Xero UI (max length = 50)
     * @return A user defined account number. This can be updated via the API and the Xero UI (max length = 50)
     * @return A user defined account number. This can be updated via the API and the Xero UI (max length = 50)
     * @return A user defined account number. This can be updated via the API and the Xero UI (max length = 50)
     * @return A user defined account number. This can be updated via the API and the Xero UI (max length = 50)
     * @return A user defined account number. This can be updated via the API and the Xero UI (max length = 50)
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * Current status of a contact – see contact status types
     * @return Current status of a contact – see contact status types
     * @return Current status of a contact – see contact status types
     * @return Current status of a contact – see contact status types
     * @return Current status of a contact – see contact status types
     * @return Current status of a contact – see contact status types
     * @return Current status of a contact – see contact status types
     * @return Current status of a contact – see contact status types
     * @return Current status of a contact – see contact status types
     */
    public function getContactStatus(): ?string
    {
        return $this->contactStatus;
    }

    /**
     * Full name of contact/organisation (max length = 255)
     * @return Full name of contact/organisation (max length = 255)
     * @return Full name of contact/organisation (max length = 255)
     * @return Full name of contact/organisation (max length = 255)
     * @return Full name of contact/organisation (max length = 255)
     * @return Full name of contact/organisation (max length = 255)
     * @return Full name of contact/organisation (max length = 255)
     * @return Full name of contact/organisation (max length = 255)
     * @return Full name of contact/organisation (max length = 255)
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * First name of contact person (max length = 255)
     * @return First name of contact person (max length = 255)
     * @return First name of contact person (max length = 255)
     * @return First name of contact person (max length = 255)
     * @return First name of contact person (max length = 255)
     * @return First name of contact person (max length = 255)
     * @return First name of contact person (max length = 255)
     * @return First name of contact person (max length = 255)
     * @return First name of contact person (max length = 255)
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * Last name of contact person (max length = 255)
     * @return Last name of contact person (max length = 255)
     * @return Last name of contact person (max length = 255)
     * @return Last name of contact person (max length = 255)
     * @return Last name of contact person (max length = 255)
     * @return Last name of contact person (max length = 255)
     * @return Last name of contact person (max length = 255)
     * @return Last name of contact person (max length = 255)
     * @return Last name of contact person (max length = 255)
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Company registration number (max length = 50)
     * @return Company registration number (max length = 50)
     * @return Company registration number (max length = 50)
     * @return Company registration number (max length = 50)
     * @return Company registration number (max length = 50)
     * @return Company registration number (max length = 50)
     * @return Company registration number (max length = 50)
     * @return Company registration number (max length = 50)
     * @return Company registration number (max length = 50)
     */
    public function getCompanyNumber(): ?string
    {
        return $this->companyNumber;
    }

    /**
     * Email address of contact person (umlauts not supported) (max length  = 255)
     * @return Email address of contact person (umlauts not supported) (max length  = 255)
     * @return Email address of contact person (umlauts not supported) (max length  = 255)
     * @return Email address of contact person (umlauts not supported) (max length  = 255)
     * @return Email address of contact person (umlauts not supported) (max length  = 255)
     * @return Email address of contact person (umlauts not supported) (max length  = 255)
     * @return Email address of contact person (umlauts not supported) (max length  = 255)
     * @return Email address of contact person (umlauts not supported) (max length  = 255)
     * @return Email address of contact person (umlauts not supported) (max length  = 255)
     */
    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    /**
     * Skype user name of contact
     * @return Skype user name of contact
     * @return Skype user name of contact
     * @return Skype user name of contact
     * @return Skype user name of contact
     * @return Skype user name of contact
     * @return Skype user name of contact
     * @return Skype user name of contact
     * @return Skype user name of contact
     */
    public function getSkypeUserName(): ?string
    {
        return $this->skypeUserName;
    }

    /**
     * @return @var DataCollection<int, ContactPersonsData>
     */
    public function getContactPersons(): ?DataCollection
    {
        return $this->contactPersons;
    }

    /**
     * Bank account number of contact
     * @return Bank account number of contact
     * @return Bank account number of contact
     * @return Bank account number of contact
     * @return Bank account number of contact
     * @return Bank account number of contact
     * @return Bank account number of contact
     * @return Bank account number of contact
     * @return Bank account number of contact
     */
    public function getBankAccountDetails(): ?string
    {
        return $this->bankAccountDetails;
    }

    /**
     * Tax number of contact – this is also known as the ABN (Australia), GST Number (New Zealand), VAT Number (UK) or Tax ID Number (US and global) in the Xero UI depending on which regionalized version of Xero you are using (max length = 50)
     * @return Tax number of contact – this is also known as the ABN (Australia), GST Number (New Zealand), VAT Number (UK) or Tax ID Number (US and global) in the Xero UI depending on which regionalized version of Xero you are using (max length = 50)
     * @return Tax number of contact – this is also known as the ABN (Australia), GST Number (New Zealand), VAT Number (UK) or Tax ID Number (US and global) in the Xero UI depending on which regionalized version of Xero you are using (max length = 50)
     * @return Tax number of contact – this is also known as the ABN (Australia), GST Number (New Zealand), VAT Number (UK) or Tax ID Number (US and global) in the Xero UI depending on which regionalized version of Xero you are using (max length = 50)
     * @return Tax number of contact – this is also known as the ABN (Australia), GST Number (New Zealand), VAT Number (UK) or Tax ID Number (US and global) in the Xero UI depending on which regionalized version of Xero you are using (max length = 50)
     * @return Tax number of contact – this is also known as the ABN (Australia), GST Number (New Zealand), VAT Number (UK) or Tax ID Number (US and global) in the Xero UI depending on which regionalized version of Xero you are using (max length = 50)
     * @return Tax number of contact – this is also known as the ABN (Australia), GST Number (New Zealand), VAT Number (UK) or Tax ID Number (US and global) in the Xero UI depending on which regionalized version of Xero you are using (max length = 50)
     * @return Tax number of contact – this is also known as the ABN (Australia), GST Number (New Zealand), VAT Number (UK) or Tax ID Number (US and global) in the Xero UI depending on which regionalized version of Xero you are using (max length = 50)
     * @return Tax number of contact – this is also known as the ABN (Australia), GST Number (New Zealand), VAT Number (UK) or Tax ID Number (US and global) in the Xero UI depending on which regionalized version of Xero you are using (max length = 50)
     */
    public function getTaxNumber(): ?string
    {
        return $this->taxNumber;
    }

    /**
     * The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     */
    public function getAccountsReceivableTaxType(): ?string
    {
        return $this->accountsReceivableTaxType;
    }

    /**
     * The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     * @return The tax type from TaxRates
     */
    public function getAccountsPayableTaxType(): ?string
    {
        return $this->accountsPayableTaxType;
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
     * true or false – Boolean that describes if a contact that has any AP  invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts payable invoice is generated against this contact.
     * @return true or false – Boolean that describes if a contact that has any AP  invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts payable invoice is generated against this contact.
     * @return true or false – Boolean that describes if a contact that has any AP  invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts payable invoice is generated against this contact.
     * @return true or false – Boolean that describes if a contact that has any AP  invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts payable invoice is generated against this contact.
     * @return true or false – Boolean that describes if a contact that has any AP  invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts payable invoice is generated against this contact.
     * @return true or false – Boolean that describes if a contact that has any AP  invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts payable invoice is generated against this contact.
     * @return true or false – Boolean that describes if a contact that has any AP  invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts payable invoice is generated against this contact.
     * @return true or false – Boolean that describes if a contact that has any AP  invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts payable invoice is generated against this contact.
     * @return true or false – Boolean that describes if a contact that has any AP  invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts payable invoice is generated against this contact.
     */
    public function getIsSupplier(): ?bool
    {
        return $this->isSupplier;
    }

    /**
     * true or false – Boolean that describes if a contact has any AR invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts receivable invoice is generated against this contact.
     * @return true or false – Boolean that describes if a contact has any AR invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts receivable invoice is generated against this contact.
     * @return true or false – Boolean that describes if a contact has any AR invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts receivable invoice is generated against this contact.
     * @return true or false – Boolean that describes if a contact has any AR invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts receivable invoice is generated against this contact.
     * @return true or false – Boolean that describes if a contact has any AR invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts receivable invoice is generated against this contact.
     * @return true or false – Boolean that describes if a contact has any AR invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts receivable invoice is generated against this contact.
     * @return true or false – Boolean that describes if a contact has any AR invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts receivable invoice is generated against this contact.
     * @return true or false – Boolean that describes if a contact has any AR invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts receivable invoice is generated against this contact.
     * @return true or false – Boolean that describes if a contact has any AR invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts receivable invoice is generated against this contact.
     */
    public function getIsCustomer(): ?bool
    {
        return $this->isCustomer;
    }

    /**
     * The default sales line amount type for a contact. Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     * @return The default sales line amount type for a contact. Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     * @return The default sales line amount type for a contact. Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     * @return The default sales line amount type for a contact. Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     * @return The default sales line amount type for a contact. Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     * @return The default sales line amount type for a contact. Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     * @return The default sales line amount type for a contact. Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     * @return The default sales line amount type for a contact. Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     * @return The default sales line amount type for a contact. Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     */
    public function getSalesDefaultLineAmountType(): ?string
    {
        return $this->salesDefaultLineAmountType;
    }

    /**
     * The default purchases line amount type for a contact Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     * @return The default purchases line amount type for a contact Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     * @return The default purchases line amount type for a contact Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     * @return The default purchases line amount type for a contact Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     * @return The default purchases line amount type for a contact Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     * @return The default purchases line amount type for a contact Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     * @return The default purchases line amount type for a contact Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     * @return The default purchases line amount type for a contact Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     * @return The default purchases line amount type for a contact Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     */
    public function getPurchasesDefaultLineAmountType(): ?string
    {
        return $this->purchasesDefaultLineAmountType;
    }

    public function getDefaultCurrency(): ?string
    {
        return $this->defaultCurrency;
    }

    /**
     * Store XeroNetworkKey for contacts.
     * @return Store XeroNetworkKey for contacts.
     * @return Store XeroNetworkKey for contacts.
     * @return Store XeroNetworkKey for contacts.
     * @return Store XeroNetworkKey for contacts.
     * @return Store XeroNetworkKey for contacts.
     * @return Store XeroNetworkKey for contacts.
     * @return Store XeroNetworkKey for contacts.
     * @return Store XeroNetworkKey for contacts.
     */
    public function getXeroNetworkKey(): ?string
    {
        return $this->xeroNetworkKey;
    }

    /**
     * The default sales account code for contacts
     * @return The default sales account code for contacts
     * @return The default sales account code for contacts
     * @return The default sales account code for contacts
     * @return The default sales account code for contacts
     * @return The default sales account code for contacts
     * @return The default sales account code for contacts
     * @return The default sales account code for contacts
     * @return The default sales account code for contacts
     */
    public function getSalesDefaultAccountCode(): ?string
    {
        return $this->salesDefaultAccountCode;
    }

    /**
     * The default purchases account code for contacts
     * @return The default purchases account code for contacts
     * @return The default purchases account code for contacts
     * @return The default purchases account code for contacts
     * @return The default purchases account code for contacts
     * @return The default purchases account code for contacts
     * @return The default purchases account code for contacts
     * @return The default purchases account code for contacts
     * @return The default purchases account code for contacts
     */
    public function getPurchasesDefaultAccountCode(): ?string
    {
        return $this->purchasesDefaultAccountCode;
    }

    /**
     * @return @var DataCollection<int, SalesTrackingCategoriesData>
     */
    public function getSalesTrackingCategories(): ?DataCollection
    {
        return $this->salesTrackingCategories;
    }

    /**
     * @return @var DataCollection<int, PurchasesTrackingCategoriesData>
     */
    public function getPurchasesTrackingCategories(): ?DataCollection
    {
        return $this->purchasesTrackingCategories;
    }

    /**
     * The name of the Tracking Category assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     * @return The name of the Tracking Category assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     * @return The name of the Tracking Category assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     * @return The name of the Tracking Category assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     * @return The name of the Tracking Category assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     * @return The name of the Tracking Category assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     * @return The name of the Tracking Category assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     * @return The name of the Tracking Category assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     * @return The name of the Tracking Category assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     */
    public function getTrackingCategoryName(): ?string
    {
        return $this->trackingCategoryName;
    }

    /**
     * The name of the Tracking Option assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     * @return The name of the Tracking Option assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     * @return The name of the Tracking Option assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     * @return The name of the Tracking Option assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     * @return The name of the Tracking Option assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     * @return The name of the Tracking Option assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     * @return The name of the Tracking Option assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     * @return The name of the Tracking Option assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     * @return The name of the Tracking Option assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     */
    public function getTrackingCategoryOption(): ?string
    {
        return $this->trackingCategoryOption;
    }

    public function getPaymentTerms(): mixed
    {
        return $this->paymentTerms;
    }

    /**
     * UTC timestamp of last update to contact
     * @return UTC timestamp of last update to contact
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to contact
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to contact
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to contact
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to contact
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to contact
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to contact
     * @example /Date(1573755038314)/
     * @return UTC timestamp of last update to contact
     * @example /Date(1573755038314)/
     */
    public function getUpdatedDateUTC(): ?string
    {
        return $this->updatedDateUTC;
    }

    /**
     * @return @var DataCollection<int, ContactGroupsData>
     */
    public function getContactGroups(): ?DataCollection
    {
        return $this->contactGroups;
    }

    /**
     * Website address for contact (read only)
     * @return Website address for contact (read only)
     * @return Website address for contact (read only)
     * @return Website address for contact (read only)
     * @return Website address for contact (read only)
     * @return Website address for contact (read only)
     * @return Website address for contact (read only)
     * @return Website address for contact (read only)
     * @return Website address for contact (read only)
     */
    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function getBrandingTheme(): mixed
    {
        return $this->brandingTheme;
    }

    public function getBatchPayments(): mixed
    {
        return $this->batchPayments;
    }

    /**
     * The default discount rate for the contact (read only)
     * @return The default discount rate for the contact (read only)
     * @format double
     * @return The default discount rate for the contact (read only)
     * @format double
     * @return The default discount rate for the contact (read only)
     * @format double
     * @return The default discount rate for the contact (read only)
     * @format double
     * @return The default discount rate for the contact (read only)
     * @format double
     * @return The default discount rate for the contact (read only)
     * @format double
     * @return The default discount rate for the contact (read only)
     * @format double
     * @return The default discount rate for the contact (read only)
     * @format double
     */
    public function getDiscount(): ?int
    {
        return $this->discount;
    }

    public function getBalances(): mixed
    {
        return $this->balances;
    }

    /**
     * @return @var DataCollection<int, AttachmentsData>
     */
    public function getAttachments(): ?DataCollection
    {
        return $this->attachments;
    }

    /**
     * A boolean to indicate if a contact has an attachment
     * @return A boolean to indicate if a contact has an attachment
     * @example false
     * @return A boolean to indicate if a contact has an attachment
     * @example false
     * @return A boolean to indicate if a contact has an attachment
     * @example false
     * @return A boolean to indicate if a contact has an attachment
     * @example false
     * @return A boolean to indicate if a contact has an attachment
     * @example false
     * @return A boolean to indicate if a contact has an attachment
     * @example false
     * @return A boolean to indicate if a contact has an attachment
     * @example false
     * @return A boolean to indicate if a contact has an attachment
     * @example false
     */
    public function getHasAttachments(): ?bool
    {
        return $this->hasAttachments;
    }

    /**
     * @return @var DataCollection<int, ValidationErrorsData>
     */
    public function getValidationErrors(): ?DataCollection
    {
        return $this->validationErrors;
    }

    /**
     * A boolean to indicate if a contact has an validation errors
     * @return A boolean to indicate if a contact has an validation errors
     * @example false
     * @return A boolean to indicate if a contact has an validation errors
     * @example false
     * @return A boolean to indicate if a contact has an validation errors
     * @example false
     * @return A boolean to indicate if a contact has an validation errors
     * @example false
     * @return A boolean to indicate if a contact has an validation errors
     * @example false
     * @return A boolean to indicate if a contact has an validation errors
     * @example false
     * @return A boolean to indicate if a contact has an validation errors
     * @example false
     * @return A boolean to indicate if a contact has an validation errors
     * @example false
     */
    public function getHasValidationErrors(): ?bool
    {
        return $this->hasValidationErrors;
    }

    /**
     * Status of object
     * @return Status of object
     * @return Status of object
     * @return Status of object
     * @return Status of object
     * @return Status of object
     * @return Status of object
     * @return Status of object
     * @return Status of object
     */
    public function getStatusAttributeString(): ?string
    {
        return $this->statusAttributeString;
    }

    /**
     * Xero identifier
     * @format uuid
     */
    public function setContactID(?string $contactID): ?self
    {
        $this->contactID = $contactID;
        return $this;
    }

    /**
     * ID for the destination of a merged contact. Only returned when using paging or when fetching a contact by ContactId or ContactNumber.
     * @format uuid
     */
    public function setMergedToContactID(?string $mergedToContactID): ?self
    {
        $this->mergedToContactID = $mergedToContactID;
        return $this;
    }

    /**
     * This can be updated via the API only i.e. This field is read only on the Xero contact screen, used to identify contacts in external systems (max length = 50). If the Contact Number is used, this is displayed as Contact Code in the Contacts UI in Xero.
     */
    public function setContactNumber(?string $contactNumber): ?self
    {
        $this->contactNumber = $contactNumber;
        return $this;
    }

    /**
     * A user defined account number. This can be updated via the API and the Xero UI (max length = 50)
     */
    public function setAccountNumber(?string $accountNumber): ?self
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Current status of a contact – see contact status types
     */
    public function setContactStatus(?string $contactStatus): ?self
    {
        $this->contactStatus = $contactStatus;
        return $this;
    }

    /**
     * Full name of contact/organisation (max length = 255)
     */
    public function setName(?string $name): ?self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * First name of contact person (max length = 255)
     */
    public function setFirstName(?string $firstName): ?self
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Last name of contact person (max length = 255)
     */
    public function setLastName(?string $lastName): ?self
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Company registration number (max length = 50)
     */
    public function setCompanyNumber(?string $companyNumber): ?self
    {
        $this->companyNumber = $companyNumber;
        return $this;
    }

    /**
     * Email address of contact person (umlauts not supported) (max length  = 255)
     */
    public function setEmailAddress(?string $emailAddress): ?self
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * Skype user name of contact
     */
    public function setSkypeUserName(?string $skypeUserName): ?self
    {
        $this->skypeUserName = $skypeUserName;
        return $this;
    }

    /**
     * Bank account number of contact
     */
    public function setBankAccountDetails(?string $bankAccountDetails): ?self
    {
        $this->bankAccountDetails = $bankAccountDetails;
        return $this;
    }

    /**
     * Tax number of contact – this is also known as the ABN (Australia), GST Number (New Zealand), VAT Number (UK) or Tax ID Number (US and global) in the Xero UI depending on which regionalized version of Xero you are using (max length = 50)
     */
    public function setTaxNumber(?string $taxNumber): ?self
    {
        $this->taxNumber = $taxNumber;
        return $this;
    }

    /**
     * The tax type from TaxRates
     */
    public function setAccountsReceivableTaxType(?string $accountsReceivableTaxType): ?self
    {
        $this->accountsReceivableTaxType = $accountsReceivableTaxType;
        return $this;
    }

    /**
     * The tax type from TaxRates
     */
    public function setAccountsPayableTaxType(?string $accountsPayableTaxType): ?self
    {
        $this->accountsPayableTaxType = $accountsPayableTaxType;
        return $this;
    }

    /**
     * true or false – Boolean that describes if a contact that has any AP  invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts payable invoice is generated against this contact.
     */
    public function setIsSupplier(?bool $isSupplier): ?self
    {
        $this->isSupplier = $isSupplier;
        return $this;
    }

    /**
     * true or false – Boolean that describes if a contact has any AR invoices entered against them. Cannot be set via PUT or POST – it is automatically set when an accounts receivable invoice is generated against this contact.
     */
    public function setIsCustomer(?bool $isCustomer): ?self
    {
        $this->isCustomer = $isCustomer;
        return $this;
    }

    /**
     * The default sales line amount type for a contact. Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     */
    public function setSalesDefaultLineAmountType(?string $salesDefaultLineAmountType): ?self
    {
        $this->salesDefaultLineAmountType = $salesDefaultLineAmountType;
        return $this;
    }

    /**
     * The default purchases line amount type for a contact Only available when summaryOnly parameter or paging is used, or when fetch by ContactId or ContactNumber.
     */
    public function setPurchasesDefaultLineAmountType(?string $purchasesDefaultLineAmountType): ?self
    {
        $this->purchasesDefaultLineAmountType = $purchasesDefaultLineAmountType;
        return $this;
    }

    public function setDefaultCurrency(?string $defaultCurrency): ?self
    {
        $this->defaultCurrency = $defaultCurrency;
        return $this;
    }

    /**
     * Store XeroNetworkKey for contacts.
     */
    public function setXeroNetworkKey(?string $xeroNetworkKey): ?self
    {
        $this->xeroNetworkKey = $xeroNetworkKey;
        return $this;
    }

    /**
     * The default sales account code for contacts
     */
    public function setSalesDefaultAccountCode(?string $salesDefaultAccountCode): ?self
    {
        $this->salesDefaultAccountCode = $salesDefaultAccountCode;
        return $this;
    }

    /**
     * The default purchases account code for contacts
     */
    public function setPurchasesDefaultAccountCode(?string $purchasesDefaultAccountCode): ?self
    {
        $this->purchasesDefaultAccountCode = $purchasesDefaultAccountCode;
        return $this;
    }

    /**
     * The name of the Tracking Category assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     */
    public function setTrackingCategoryName(?string $trackingCategoryName): ?self
    {
        $this->trackingCategoryName = $trackingCategoryName;
        return $this;
    }

    /**
     * The name of the Tracking Option assigned to the contact under SalesTrackingCategories and PurchasesTrackingCategories
     */
    public function setTrackingCategoryOption(?string $trackingCategoryOption): ?self
    {
        $this->trackingCategoryOption = $trackingCategoryOption;
        return $this;
    }

    public function setPaymentTerms(mixed $paymentTerms): ?self
    {
        $this->paymentTerms = $paymentTerms;
        return $this;
    }

    /**
     * UTC timestamp of last update to contact
     * @example /Date(1573755038314)/
     */
    public function setUpdatedDateUTC(?string $updatedDateUTC): ?self
    {
        $this->updatedDateUTC = $updatedDateUTC;
        return $this;
    }

    /**
     * Website address for contact (read only)
     */
    public function setWebsite(?string $website): ?self
    {
        $this->website = $website;
        return $this;
    }

    public function setBrandingTheme(mixed $brandingTheme): ?self
    {
        $this->brandingTheme = $brandingTheme;
        return $this;
    }

    public function setBatchPayments(mixed $batchPayments): ?self
    {
        $this->batchPayments = $batchPayments;
        return $this;
    }

    /**
     * The default discount rate for the contact (read only)
     * @format double
     */
    public function setDiscount(?int $discount): ?self
    {
        $this->discount = $discount;
        return $this;
    }

    public function setBalances(mixed $balances): ?self
    {
        $this->balances = $balances;
        return $this;
    }

    /**
     * A boolean to indicate if a contact has an attachment
     * @example false
     */
    public function setHasAttachments(?bool $hasAttachments): ?self
    {
        $this->hasAttachments = $hasAttachments;
        return $this;
    }

    /**
     * A boolean to indicate if a contact has an validation errors
     * @example false
     */
    public function setHasValidationErrors(?bool $hasValidationErrors): ?self
    {
        $this->hasValidationErrors = $hasValidationErrors;
        return $this;
    }

    /**
     * Status of object
     */
    public function setStatusAttributeString(?string $statusAttributeString): ?self
    {
        $this->statusAttributeString = $statusAttributeString;
        return $this;
    }
}
